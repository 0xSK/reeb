import RPi.GPIO as GPIO
import sys

GPIO.setmode(GPIO.BCM)
GPIO.setup(int(sys.argv[1]), GPIO.IN)
if GPIO.input(int(sys.argv[1])):
	print "ON"
else:
	print "OFF"
