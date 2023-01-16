double CO=0;
double CO2=0;
double Acetaldehyde=0;
double Formaldehyde=0;

void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  Serial.println("MQ135 Proteus Library by Satyam Singh");
}

void loop() {
  // put your main code here, to run repeatedly:
  /*int raw_data=analogRead(A0);
  int raw_data2=analogRead(A1);
  int raw_data3=analogRead(A2);
  int raw_data4=analogRead(A3);*/
  CO=random(800,1000);
  CO2=random(200,2000);
  Acetaldehyde=random(100,160);
  Formaldehyde=random(200,300);

  
    Serial.println("");
    Serial.print("Carbon Monoxide Level ppm v/v=");
    Serial.print(CO);
    Serial.println("");


  Serial.println("");
  Serial.print("Carbon Dioxide Level ppm v/v=");
  Serial.print(CO2);
  if(CO2 >1000){
       Serial.println("");
       Serial.print("vehicles smoke testing fail");
  }else{
       Serial.println("");
       Serial.print("vehicles smoke testing pass");
  }  
  Serial.println("");

    Serial.println("");
    Serial.print("Acetaldehyde Level ppm v/v=");
    Serial.print(Acetaldehyde); 
    Serial.println("");

   Serial.println("");
   Serial.print("Formaldehyde Level ppm v/v=");
   Serial.print(Formaldehyde); 
   Serial.println("");


 delay(400);


   
}
