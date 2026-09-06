#include<stdio.h>
#include<conio.h>
void main(){
	int num;
	printf("Enter a number: ");
	scanf("%d",&num);
	if(num<0){
		printf("Number is negative");
	}
	else if(num>0){
		printf("Number is positive");
	}
	else{
		printf("Number is zero");
	}
}
