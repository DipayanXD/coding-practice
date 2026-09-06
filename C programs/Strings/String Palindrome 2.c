#include<stdio.h>
#include<conio.h>
#include<string.h>
void main(){
    char str[100], rev[100];
    int len, i;
    printf("Enter a string: ");
    gets(str);
    len = strlen(str);
    for (i = 0; i < len; i++) {
        rev[i] = str[len - i - 1];        
    }
    rev[len] = '\0';
    printf("Reversed string: %s", rev);
    if (strcmp(str, rev) == 0) {
        printf("\nString is a palindrome.");
    }
    else{
        printf("\nString is not a palindrome.");
    }
    getch();
}