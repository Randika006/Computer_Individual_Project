
#include <Adafruit_Sensor.h>
#include <DHT.h>
#include <DHT_U.h>


//dht DHT;

//#define DHT11_PIN 7

#define DHTPIN 2    
#define DHTTYPE    DHT22    
DHT dht(DHTPIN, DHTTYPE);

uint32_t delayMS;


void setup() {
  Serial.begin(9600);
   
}

void loop() {
  double speed = random(30,300);
  double humid =random(100,160);
  double temp=random(200,300);;  
  // int chk = DHT.read11(DHT11_PIN);
  Serial.println("");
  Serial.print("Accelarate Speed = ");
  Serial.println(speed);
  Serial.println("km/hr");
  Serial.println("");



  Serial.println("");
  Serial.print("Temperature = ");
  Serial.println(temp);
  Serial.println("degree centigrate");
  Serial.println("");

  Serial.println("");
  Serial.print("Humidity = ");
  Serial.println(humid);
  Serial.println("");

  delay(400);

  }

  
