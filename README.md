# Task1-Robot_Control-ESP32_Http_request

In this task, for first part, I created a robot control panel weppage that is responsible for moving the robot to different directions like forward or backward and saving them definitely in the database with name and ID to be unique in the order along this movement cycle.

So, I design first web page that contains these control buttons by Html with the function of sendDirection by javascripit, CSS style and connected them to the database (phpmyadmin) by PHP script to save a mouse click in different directions in any order in index.html and save_direction.php files.
Then, in the second web page, I write the code that connects to database by PHP script to retrieve last direction when it is called by retrieve_last_direction.php file.

For the second part, I used http request in ESP32 code to get last direction from database by simulation with light turning on when request is successfully processed and getting correct direction, here also I used Smart Mehods company links to help me achieve that goal of this task because I faced many problems with hosting services as I have experienced many of them, so thank you so much for supporting me in this difficult task.

references help me:
https://www.hackster.io/Hack-star-Arduino/blink-an-led-esp32-online-arduino-simulator-2022-a436cc
https://www.hackster.io/Hack-star-Arduino/esp32-simulator-led-chaser-project-2022-c4d1cb
PPT references
