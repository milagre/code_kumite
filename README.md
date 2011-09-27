Bowling Code Kumite
=================

This project is for a group tdd excersize using the Bowling Game Kata
(http://butunclebob.com/ArticleS.UncleBob.TheBowlingGameKata) as a Kumite (or a sparring match).

What's a Kumite?
----------------
A Kumite is to a Kata as Programming is to Pair Programming.

The idea behind a Code Kumite is to combine pair programming and test driven development into
pair-tdd.  The idea came to me while working with someone trying to teach good tdd practices.  I
found myself being much more critical of his tests than I was of my own, and cheating the
implementation to poke holes in his tests.  I believe that pairs often produce better code, but the
interplay between him writing tests to break my implementation and me implementing to break tests 
produced better tests *and* better code.  

Preparation
-----------
You will need:

* A group of people (even number is better)
* A moderator
* PHP5
* PHPUnit

Break the group up into pairs.  If there is an odd number of people, the moderator can be part of a pair.
In each pair, one person will start as the Tester, and the other will start as the Implementor.

As the moderator, during the first run walk amongts the groups and provide feedback.

If people get stuck on the implementation for a long period of time, end the round early, and switch
roles. On the second round, do the exercise with the group so they can follow along.  Even if groups
do not get stuck, I recommend doing this during the second run-through anyways, so they can see the
proper way.

Process
-------
Throughout the process.  The Tester and Implementer should try to avoid copy/paste is allowed.  Cut/paste
is fine.  Copying is to be avoided, and while feeling the urge to copy shows you will probably need
to refactor later (and often that you maybe should have refactored earlier), you should write what you
need when you need it until you get to the refactor phase.

Try to minimize talking within the pairs until step 4.  But please talk as much is as needed to get
over implementation hurdles when someone gets stuck.  The idea here is to focus on communicating via
code.  Tests that can communicate requirements to the Implementor without words are better tests.

### Step 1: Test Case
Moderator: Provide each group with the next case

### Step 2: Red
Tester's Turn: Write a single unit test

* Focus on FIRST
* Focus on AAA
* Make your test as descriptive as possible

### Step 3: Green
Implementor's Turn: Make the test pass

* Write as little code as possible - no more than the test demands
* Do it as quickly as possible - your top priority is to return the build to green

If the implementation is not obvious:

* Revert the test (commenting out is fine)
* Refactor the implementation to pass all previous tests with a focus on enabling the
  implementation of the next test

### Step 4: Refactor

* Do NOT change the scope of any test or the implementation at this time, though you may change
  the test in order to make sure it's testing what you wanted
* At this point, the members of each pair may speak to each other freely
* Discuss potential refactorings
* Implement refactorings together, as a team
* Ensure the build does not go red during this process
 * If it does, and the fix is not obvious, immediately revert the changes
* When you are done:
 * No implementation or test function should be over 5-10 lines of code when you are done
 * All code should be easily understandable

### Step 5: Repeat
Each pair should repeat steps 2-4 until they have fully implemented the requirement provided

* Existing tests may be altered if they are not useful, or not testing what you wanted
* New tests may be added

### Step 6: Commit
Commit your code

    git add -A; git commit -m "..."

At this point the moderator should pause the entire group and host a discussion about anything
the pairs would like to discuss.

Return to Step 1 until all requirements have been met

### Conclusion:
Reflect on the evolution of the tests and implementation:

* How did the tests change how you coded?
* Did you ever write more code than you needed?
* Did you ever write less code than you needed?

Rotate Testers through other groups, so everyone has a new partner, switch roles, and repeat, so
that everyone has a chance to be the Tester and the Implementor

### Requirements / Test Cases

| Requirement | Suggested Test Case |
|-------------|---------------------|
| score() returns something | Roll a gutter game. Score should be 0 |
| Open frames are calculated | Roll all 1s. Score should be 20 |
| Spares are calculated | Roll a spare, then one more ball, then 0s. |
| Strikes are calculated | Roll a strike, then two more balls, then 0s |
| Perfect game is 300 | Roll 12 strikes |
| Near-perfect game is 299 | Roll 11 strikes, then a 9. Cry |

