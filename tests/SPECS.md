// First Spec originally passed but expected boolean return and as further testing would expect an integer return I commented out the test for spec one. Wasn't sure how I could
get it to pass when I could only have one return?

###### I had some issues writing specs, I couldn't think of how to break this down further. I also am not as sure on my commit messages, unsure if I'm writting to much or to little. I did attempt to make more commits then I usaully do. I think these are the hardest for me, writing specs and what to say in my commits. I also had some issues with my function in Silex even after passing tests. I left the original pieces of code to the function in commented out to see. I would love to know what was going on? There are further comments in the function.

###First Spec
####Searches for a word input inside of a string input and returns true

#####_INPUT1: "The quick brown fox jumped over the fence"_

#####_INPUT2: "fox"_

#####_OUTPUT: true_
 
 ###Second Spec
 ####Searches for a word inside a string that has two instances of that word and returns the number of times it is inside that string also allows special characters
 
 #####_INPUT1: "Where is the nearest diner? Is there a diner on 5th and Washington?"_
 
 #####_INPUT2: "diner"_
 
 #####_OUTPUT: 2_
 
 ###Third Spec
 ####Searches for a word inside a string that has coumpound words that contain that word and still returns the proper number of times that word exists
 
 #####_INPUT1: "How much wood would a woodchuck chuck if a woodchuck could chuck wood"_
 
 #####_INPUT2: "wood"_
 
 #####_OUTPUT: 2_
 
###Fourth Spec
 ####Searches for a word inside a string that has multiple instances of that word and returns the number of times it is inside that string
 
 #####_INPUT1: "Where is Portland? How many times have you been to Portland? What is Portland like?"_
 
 #####_INPUT2: "Portland"_
 
 #####_OUTPUT: 3_