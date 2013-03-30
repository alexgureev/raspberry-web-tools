#!/usr/bin/python
# -*- coding: utf-8 -*-

# simple test of pyfirmata and Arduino; read from an LM35 on A0,
#                                       brighten an LED on D3 using PWM
# scruss, 2012-08-14 - tested on Arduino Uno & Raspberry Pi (Raspbian)

import pyfirmata

# Create a new board, specifying serial port
board = pyfirmata.Arduino('/dev/ttyACM0')

# start an iterator thread so that serial buffer doesn't overflow
it = pyfirmata.util.Iterator(board)
it.start()

# set up pins
pin0=board.get_pin('a:0:i')             # A0 Input      (LM35)
pin3=board.get_pin('d:13:p')             # D3 PWM Output (LED)

# IMPORTANT! discard first reads until A0 gets something valid
while pin0.read() is None:
    pass

for i in range(10):
    pin3.write(i/10.0)                  # set D3 to 0, 10%, 20%, ... brightness
    print "PWM: %d %% Temperature %.1f °C" % (i * 10, pin0.read() * 5 * 100)
    board.pass_time(1)                  # pause 1 second

pin3.write(0)                           # turn LED back off
board.exit()