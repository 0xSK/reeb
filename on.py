#!/usr/bin/env python
import RPi.GPIO as GPIO
import sys

#print "1"
#time.sleep(5)
#print "2"

GPIO.setmode(GPIO.BCM)
GPIO.setup(int(sys.argv[1]), GPIO.OUT)
GPIO.output(int(sys.argv[1]), GPIO.HIGH)
GPIO.setup(int(sys.argv[2]), GPIO.OUT)
GPIO.output(int(sys.argv[2]), GPIO.HIGH)

print "Light on ho gayi hai"

#GPIO.cleanup()

