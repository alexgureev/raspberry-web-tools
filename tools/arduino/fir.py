#!/usr/bin/python
import pyfirmata

board = pyfirmata.Arduino('/dev/ttyACM0')

it = pyfirmata.util.Iterator(board)
it.start()

pin3=board.get_pin('d:13:p')             # D3 PWM Output (LED)

for i in range(10):
    pin3.write(i/10.0)                  # set D3 to 0, 10%, 20%, ... brightness
    board.pass_time(1)                  # pause 1 second

pin3.write(0)                           # turn LED back off
board.exit()