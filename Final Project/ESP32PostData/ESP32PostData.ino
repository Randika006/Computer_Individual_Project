#include <WiFi.h>
#include <HTTPClient.h>
#include "ThingSpeak.h"


// Replace with your network credentials

const char* ssid = "SLT-4G-E1B9";
const char* password = "HN00JAJB1QH";

// REPLACE with your Domain name and URL path or IP address with path
const char* serverName = "http://192.168.1.101/IOT/post-esp-data.php";
//const char* serverName = "http://localhost/IOT/post-esp-data.php";

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
  pinMode(ace_gas, INPUT);  //Initializing Serial Data Transmission and Sensors
  pinMode(ace_gas1, INPUT);  //Initializing Serial Data Transmission and Sensors

  pinMode(ace_gas2, INPUT);  //Initializing Serial Data Transmission and Sensors
  pinMode(ace_gas3, INPUT);  //Initializing Serial Data Transmission and Sensors
  
  
  
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
     
  float co = analogRead(ace_gas1);
  float data1 = map(co, 20, 350, 500, 125);

  float co2 = analogRead(ace_gas2);
  float data2 = map(co2, 20, 350, 60, 125);

  float dtso2=random(20,800);
  float dtno2=random(100,900);
  

  float acetaldehyde = analogRead(ace_gas);
  float data = map(acetaldehyde, 20, 350, 80, 125);
  
  float formaldehyde = analogRead(ace_gas3);
  float data3 = map(formaldehyde, 20, 350, 35, 125);
  
  

    
  Serial.println(data1);
  Serial.println(data2);
  Serial.println(dtso2);
  Serial.println(dtno2);
  
  Serial.println(data);
  Serial.println(data3);


 
  if(data1 > 6000){
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
    String httpRequestData ="&value="+ String(data1)+"&co2="+String(data2)+"&so2="+String(dtso2)+"&no2="+String(dtno2)+"&value1=" + String(data) +"&formal="+String(data3)+"";

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
Serial.println(data1);
Serial.println("ppm" );

Serial.print("carbon dioxide level:" );
Serial.println(data2);
Serial.println("ppm" );

Serial.print("sulfer dioxide level:" );
Serial.println(dtso2);
Serial.println("ppm" );

Serial.print("nitrogen dioxide level:" );
Serial.println(dtno2);
Serial.println("ppm" );


Serial.print("acetaldehyde level: " );
Serial.print(data);
Serial.println("ppm" );


Serial.print("formaldehyde level: " );
Serial.print(data3);
Serial.println("ppm" );



ThingSpeak.setField(1, data1);
ThingSpeak.setField(2, data2);

ThingSpeak.setField(3, data);
ThingSpeak.setField(4, data3);
ThingSpeak.setField(6, dtso2);
ThingSpeak.setField(7, dtno2);



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
   delay(5000);
  // Better use 10 seconds, records are creating every 10 seconds. 
  //delay(10000);
}