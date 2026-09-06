#include<stdio.h>
int main(){
    int a,b,c,d,e,f,g;
    printf("Input the amount:");
    scanf("%d",&a);
    b=a/100; a%=100;
    c=a/50; a%=50;
    d=a/20; a%=20;
    e=a/10; a%10;
    f=a/5; a%=5;
    g=a/2; a%=2;
    printf("There are:\n%d Note(s) of 100\n%d Note(s) of 50\n%d Note(s) of 20\n%d Note(s) of 10\n%d Note(s) of 5\n%d Note(s) of 2\n%d Note(s) of 1\n", b,c,d,e,f,g,a);
    return 0;
}