#include<stdio.h>
int main()
{
	int arr[5],i,m;
	printf("Enter 5 values: \n");
	for(i=0;i<5;i++){
		scanf("%d",&arr[i]);
	}
	m=arr[0];
	for(i=0;i<5;i++){
		if(arr[i]>m){
			m = arr[i];
		}
	}
	printf("\n Maximum value of this array is %d",m);
	m=arr[0];
	for(i=0;i<5;i++){
		if(arr[i]<m){
			m = arr[i];
		}
	}
	printf("\n Minimum value of this array is %d",m);
	return 0;
}
