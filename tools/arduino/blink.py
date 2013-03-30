#!/usr/bin/python
from pyfirmata import Arduino, util

PIN = 12 # Pin 12 is used
DELAY = 2 # A 2 seconds delay

PORT = '/dev/ttyACM0'
board = Arduino(PORT)

while True:
    board.digital[PIN].write(1) # Set the LED pin to 1 (HIGH)
    board.pass_time(DELAY)
    board.digital[PIN].write(0) # Set the LED pin to 0 (LOW)
    board.pass_time(DELAY)