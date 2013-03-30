#!/usr/bin/python

import pyfirmata

PORT = '/dev/ttyACM0'           # change this to suit
board = pyfirmata.Arduino(PORT)
print 'pyFirmata version:\t%s' % pyfirmata.__version__
print 'Hardware:\t\t%s' % board.__str__()
print 'Firmata firmware:\t%i.%i' % (board.get_firmata_version()[0],
                                    board.get_firmata_version()[1])
board.exit()

#import serial

#ser = serial.Serial('/dev/ttyACM0', 9600, timeout=1)

#while True:
#    ser.readline()

#ser.close()