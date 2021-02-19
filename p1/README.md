# Project 1
+ By: Britney Sandau
+ Production URL: <http://e15p1.britsmitt.me>

## Outside resources

To check to see if a string has been entered within the form.
https://stackoverflow.com/questions/718986/why-a-function-checking-if-a-string-is-empty-always-returns-true

To reverse a string.
https://www.geeksforgeeks.org/php-reverse-string/#:~:text=Reversing%20string%20using%20strrev(),and%20returns%20a%20reversed%20string.&text=Reversing%20string%20using%20recursion%20and,recursion%20and%20substr()%20function.

Trim out all white spaces in a string. 
https://www.tutorialrepublic.com/faq/how-to-strip-all-spaces-out-of-a-string-in-php.php

Counting characters within a string. 
https://www.php.net/manual/en/function.count-chars.php

Counting characters within a substrings. 
https://www.php.net/manual/en/function.substr-count.php

Royalty free image for the background.
https://pixabay.com/photos/quotes-carpe-diem-word-diem-729173/

Adding image to background. 
https://www.w3schools.com/html/html_images_background.asp

To pick a color for various fonts and borders. 
https://www.w3schools.com/colors/colors_picker.asp

Centering items on the page. 
https://www.w3.org/Style/Examples/007/center.en.html

Removing special characters from a string. 
https://stackoverflow.com/questions/14114411/remove-all-special-characters-from-a-string

To replace a string. I was going to use this for my letter shift.
https://www.php.net/manual/en/function.str-replace.php

## Notes for instructor

Dear Professor Buck,

I felt a little bit more comfortable with this assignment because I was able to 
navigate the php documentation better after having taken e2 last semester. I 
was able to understand the logic as well in order to solve the problem. 
Which was a pretty good feeling. Although, I do have a long ways to go. I found 
this to be especially true when I tried to do the letter shift problem. Once 
the project is graded I will try to ask for help in the forum to see where I 
went wrong. I have included it below in these notes so you can see how far off 
I was. 

The code I did submit does not have as many comments as I normally do. I tried to 
name my variables in a way that I did not have to comment as much as I did last 
semester. I hope this is ok. There were some other areas I could improve 
upon, like my vowelCount function. It seems like I could do something with this 
function to make it shorter but I am unsure at this point. Like my letter shift 
problem I will try to ask in the forum to see if anyone has any ideas. 

As always, I value any you can provide. Please let me know if you have any questions.

Best regards,
Britney Sandau

```php
function isLetterShift($inputString)
{
    /* I am sure there is an easier way to do an array with the alphabet but I 
    was unsure. The following code would work for if I kept the array short like 
    $aToZ = ['a', 'b', 'c']
    $zToA = ['z', 'y', 'x']
    
    If I made the array longer, to include the whole alphabet it would stop working.
    I noticed it would only work to the letter 'm' and then nothing. I think it is 
    because arrays do not duplicate items but I was unsure. I will try to post 
    this question in the forum once the assignment is graded. I was checking to 
    see if had any input. Thank you again.*/
    $letterScramble = $inputString;
    $aToZ = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $zToA = ['z', 'y', 'x', 'w', 'v', 'u', 't', 's', 'r', 'q', 'p', 'o', 'n', 'm', 'l', 'k', 'j', 'i', 'h', 'g', 'f', 'e', 'd', 'c', 'b', 'a', 'Z', 'Y', 'X', 'W', 'V', 'U', 'T', 'S', 'R', 'Q', 'P', 'O', 'N', 'M', 'L', 'K', 'J', 'I', 'H', 'G', 'F', 'E', 'D', 'C', 'B', 'A'];
    $newLetters = str_replace($aToZ, $zToA, $inputString);
   
    return ($newLetters);
}
```

