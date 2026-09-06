#include <stdio.h>

int main() {
    int amount, notes_100, notes_50, notes_20, notes_10, notes_5, notes_2, notes_1;
    printf("Input the amount: ");
    scanf("%d", &amount);

    notes_100 = amount / 100; amount %= 100;
    notes_50 = amount / 50; amount %= 50;
    notes_20 = amount / 20; amount %= 20;
    notes_10 = amount / 10; amount %= 10;
    notes_5 = amount / 5; amount %= 5;
    notes_2 = amount / 2; amount %= 2;
    notes_1 = amount;

    printf("There are:\n%d Note(s) of 100\n%d Note(s) of 50\n%d Note(s) of 20\n%d Note(s) of 10\n%d Note(s) of 5\n%d Note(s) of 2\n%d Note(s) of 1\n", 
           notes_100, notes_50, notes_20, notes_10, notes_5, notes_2, notes_1);

    return 0;
}