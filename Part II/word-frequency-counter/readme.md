# Case Study: Word Frequency Counter

### Problem Description:

You are tasked with developing a PHP program that reads a text document and calculates the frequency of each word in the document. The program should provide a list of unique words along with their respective frequencies. The students are required to create functions to accomplish this task.

### Requirements:

- User Input: The program should allow the user to input text by pasting it into a textarea provided in the HTML interface.

        The user can input text via a textarea in index.php

- Tokenization: The program should tokenize the pasted text into words. Words should be considered as sequences of characters separated by spaces, punctuation, or line breaks.

        The tokenizeText() function processes text by converting it to lowercase, removing punctuation, and splitting it into words.

- Word Frequency Calculation: Create a function that calculates the frequency of each unique word in the input text. Common stop words (e.g., "the," "and," "in") should be ignored during word frequency calculation.

        The calculateWordFrequency() function counts the occurrences of each unique word.

        The removeStopWords() function filters out common stop words.

- Sorting Options: Implement a function that sorts the list of words by frequency. The user should have the option to choose either ascending or descending order during the sorting process.

        The sortWordFrequency() function sorts words in ascending or descending order based on user selection.

- Display Limit: Provide an option for the user to specify the number of words to display in the output. This should limit the number of words shown, such as displaying the top N most frequent words.

        The program restricts output using array_slice() based on the user-specified limit.

- User Interface: Create a user-friendly interface with an HTML form that includes a textarea for text input, a dropdown menu to select sorting order, and an input field to specify the number of words to display.

        index.php provides a clean UI with a text area, dropdown for sorting, and input for the number of words.

- Output: Display the result, including the list of unique words and their respective frequencies, based on the user's input and choices. The output should be presented in a clear and readable format.

        The results are presented in a table format in index.php with words and their respective frequencies.

- Error Handling: Implement error handling to handle cases where the user provides invalid input or if the program encounters any issues during processing.

        The program checks for empty input and displays an error message if necessary.

### Hints and Considerations:

Create functions for each major step (e.g., reading the file, tokenizing the text, calculating word frequencies).

Students can use built-in PHP functions like file_get_contents(), str_word_count(), explode(), array_count_values(), and arsort() for sorting.

Provide a list of common stop words that students can use to filter out irrelevant words from their analysis.
