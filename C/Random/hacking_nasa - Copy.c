#include<stdio.h>
int main ()
{
    int pin;
    printf("Enter your pin:");
    scanf("%d",&pin);
    if (pin==2077){
        printf("Wellcome to nasa");
    }
    else{
        printf("Get out");
    }
    return 0;
}