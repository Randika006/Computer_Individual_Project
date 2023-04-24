#include <WiFi.h>
#include <HTTPClient.h>
#include "ThingSpeak.h"

// Replace with your network credentials

const char* ssid = "SLT-4G-E1B9";
const char* password = "HN00JAJB1QH";

// REPLACE with your Domain name and URL path or IP address with path
const char* serverName = "http://192.168.1.101/IOT/post-esp-data.php";


// -----ThingSpeak channel details

unsigned long myChannelNumber = 2015529;

const char * myWriteAPIKey = "GQPAZWD1S7ZJE03G";

// ----- Timer variables

unsigned long lastTime = 0;

unsigned long timerDelay = 1000;

WiFiClient client;

int ace_gas = 27;

int ace_gas1 = 25;

int ace_gas2 = 33;

int ace_gas3 = 32;

void setup() {
  pinMode(ace_gas, INPUT);  //Initializing Serial Data Transmission and Sensors  D27 PIN IN ESP32 BOARD
  pinMode(ace_gas1, INPUT);  //Initializing Serial Data Transmission and Sensors D25 PIN IN ESP32 BOARD 

  pinMode(ace_gas2, INPUT);  //Initializing Serial Data Transmission and Sensors D33 PIN IN ESP32 BOARD
  pinMode(ace_gas3, INPUT);  //Initializing Serial Data Transmission and Sensors D32 PIN IN ESP32 BOARD 
  
  
  
  WiFi.mode(WIFI_STA);

  Serial.begin(115200);
  WiFi.begin(ssid, password);
  Serial.println("Connecting");
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.print("Connected to WiFi network with IP Address: ");
  Serial.println(WiFi.localIP());

  ThingSpeak.begin(client); // Initialize ThingSpeak


}

void loop() {
  float co = analogRead(ace_gas1);  //MQ-7 Connect with D25 PIN IN ESP32 BOARD.
  float co2 = analogRead(ace_gas2); //MQ-135 Connect with D33 PIN IN ESP32 BOARD.
  float acetaldehyde = analogRead(ace_gas); //MQ-135 Connect with D27 PIN IN ESP32 BOARD.
  float formaldehyde = analogRead(ace_gas3); //MQ-135 Connect with D32 PIN IN ESP32 BOARD.

  
  Serial.println(co);
  Serial.println(co2);
  Serial.println(acetaldehyde);
  Serial.println(formaldehyde);

  if(co2 > 1000){
     Serial.println("Testing Fail");
  }else if(co > 60) {
     Serial.println("Testing Fail");  
  }else{
     Serial.println("Testing Pass");  
  }
   
  if (WiFi.status() == WL_CONNECTED) {
    WiFiClient client;
    HTTPClient http;
    // Your Domain name with URL path or IP address with path
    http.begin(client, serverName);
    // Specify content-type header
    http.addHeader("Content-Type", "application/x-www-form-urlencoded");
    // Prepare your HTTP POST request data
    String httpRequestData ="&co="+ String(co)+"&co2="+String(co2)+"&acetaldehyde=" + String(acetaldehyde) +"&formaldehyde="+String(formaldehyde)+"";

    Serial.print("httpRequestData: ");
    Serial.println(httpRequestData);
    int httpResponseCode = http.POST(httpRequestData);
    if (httpResponseCode > 0) {
      Serial.print("HTTP Response code: ");
      Serial.println(httpResponseCode);
    } else {
      Serial.print("Error code: ");
      Serial.println(httpResponseCode);
    }
    // Free resources
    http.end();
  } else {
    Serial.println("WiFi Disconnected");
  }


//Send Data to ThingSpeak Channel 
if ((millis() - lastTime) > timerDelay )
{
    


Serial.print("carbon monoxide level:" );
Serial.println(co);
Serial.println("ppm" );

Serial.print("carbon dioxide level:" );
Serial.println(co2);
Serial.println("ppm" );


Serial.print("acetaldehyde level: " );
Serial.print(acetaldehyde);
Serial.println("ppm" );


Serial.print("formaldehyde level: " );
Serial.print(formaldehyde);
Serial.println("ppm" );



ThingSpeak.setField(1, co);
ThingSpeak.setField(2, co2);

ThingSpeak.setField(3, acetaldehyde);
ThingSpeak.setField(4, formaldehyde);
//ThingSpeak.setField(6, dtso2);
//ThingSpeak.setField(7, dtno2);



// Write to ThingSpeak. There are up to 8 fields in a channel, allowing you to store up to 8 different

// pieces of information in a channel. Here, we write to field 1.

int x = ThingSpeak.writeFields(myChannelNumber,myWriteAPIKey );

if(x == 200)

{

Serial.println("Channel update successful." );

}

lastTime = millis();

}
   //Send an HTTP POST request every 1 seconds
   //delay(1000);
  
  
  //Send an HTTP POST request every 5 seconds
  //delay(5000);
  // Better use 10 seconds, records are creating every 10 seconds. 
  delay(10000);
 
}
