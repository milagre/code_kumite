The Bowling Kata/Kumite
======================

This the Bolwing Code Kata from 
[Uncle Bob](http://butunclebob.com/ArticleS.UncleBob.TheBowlingGameKata)
as a Kumite.  It can also be used as a Kata, on your own.

What is Bowling?
---------------
From [Wikipedia](https://secure.wikimedia.org/wikipedia/en/wiki/Ten-pin_bowling)
Bowling (or ten-pin bowling) is
> a competitive sport in which a player (the "bowler") rolls a bowling ball down a wooden or
> synthetic (polyurethane) lane with the objective of scoring points by knocking down as many pins
> as possible.

The game is broken into ten frames as follows:

* A frame ends when all the pins have been knocked down, or when two balls have been rolled.
* A roll of ten of less on the first ball in a frame is worth the number of pins knocked down
* A roll of a total of ten in two rolls in a frame is called a spare, and receives as a bonus to the
  frame score the value of the next roll
* A roll on the first ball in a frame that knocks down all ten pins is called a strike, and receives
  as a bonus to the frame score the value of the next two rolls
* In the last (tenth) frame, the player is allowed to roll a maximum of three balls to complete any
  bonuses to a strike or spare.  These extra rolls do not get counted 'twice' as rolls off a strike
  or spare do in other frames.
* Therefore, the maximum score possible is 300, achieved by rolling twelve strikes (once each in the
  first nine frames, and three in the tenth - the last two to complete the bonus of the first)

Requirements / Test Cases
=========================

| Requirement | Suggested Test Case |
|-------------|---------------------|
| score() returns something | Roll a gutter game. Score should be 0 |
| Open frames are calculated | Roll all 1s. Score should be 20 |
| Spares are calculated | Roll a spare, then one more ball, then 0s. |
| Strikes are calculated | Roll a strike, then two more balls, then 0s |
| Perfect game is 300 | Roll 12 strikes |

Additional Requirements
======================
The best implementations will not need to change their code to pass these cases.  Weaker
implementations might fail one or more.

| Requirement | Suggested Test Case |
|-------------|---------------------|
| Near-perfect game is 299 | Roll 11 strikes, then a 9. Cry because you almost had it|
| Dutch-200 | Roll alternating strikes then spares starting with a spare |

