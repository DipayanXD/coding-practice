#include<stdio.h>
#include<conio.h>
void main(){
	int year;
	printf("Enter a year: ");
	scanf("%d",&year);
	if(year%100!=0 && year%4==0||year%400==0) {
		printf("Year is a leap year");
	}
	else{
		printf("Year is no a leap year");
	}
	getch();
}
