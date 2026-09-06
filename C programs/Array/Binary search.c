#include<stdio.h>
void main()
{
	int arr[5],i,n,L,U,M,flag=0;
	printf("Enter 5 value in Increase format:\n ");
	for(i=0;i<5;i++){
		scanf("%d",&arr[i]);
	}
	printf("\nEnter your value to search: ");
	scanf("%d",&n);
	L=0; U=4;
	while(L<=U){
		M=(L+U)/2;
		if(arr[M]==n){
			flag = 1;
			break;
		}
		if(n<arr[M]){
			U=M-1;
		}
		else{
			L=M+1;
		}
	}
	if(flag==0){
		printf("\n Value not found!");
	}
	else{
		printf("\n Value found at index %d",M);
	}
}
