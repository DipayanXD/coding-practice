#include<stdio.h>
void main()
{
	int arr[5],i,n,flag=0;
	printf("Enter 5 integer value: \n");
	for(i=0;i<5;i++){
		scanf("%d",&arr[i]);
	}
	printf("\nEnter value to search: ");
	scanf("%d",&n);
	for(i=0;i<5;i++){
		if(arr[i]==n){
			flag = 1;
			break;
		}
	}
	if(flag==0){
		printf("\nValue not found");
	}
	else{
		printf("\nValue found at %d position",i+1);
	}
}
