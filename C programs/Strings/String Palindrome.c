#include <stdio.h>
#include <string.h>

int main() {
    char str[100];
    int length, i, isPalindrome = 1;

    // Input string from the user
    printf("Enter a string: ");
    scanf("%99s", str); // Limit input to prevent overflow

    // Find the length of the string
    length = strlen(str);

    // Check if the string is a palindrome
    for (i = 0; i < length / 2; i++) {
        if (str[i] != str[length - i - 1]) {
            isPalindrome = 0; // Not a palindrome
            break;
        }
    }

    // Output result
    if (isPalindrome) {
        printf("The string '%s' is a palindrome.\n", str);
    } else {
        printf("The string '%s' is not a palindrome.\n", str);
    }

    return 0;
}

