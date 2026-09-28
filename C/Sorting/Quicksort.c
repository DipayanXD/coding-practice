#include<stdio.h>
void swap(int *x, int *y) {
    int temp = *x;
    *x = *y;
    *y = temp;
}
int partition(int a[],int lb,int ub){
	int pivot = a[lb];
	int start = lb;
	int end = ub;
	while (start < end){
		while(a[start]<=pivot && start < ub){
			start++;
		}
		while(a[end]>pivot){
			end--;
		}
		if (start < end){
			swap(&a[start],&a[end]);
		}	
	}
	swap(&a[lb],&a[end]);
	return end;
	
}
void QuickSort(int a[],int lb,int ub){
	if(lb < ub){
		int loc = partition(a,lb,ub);
		QuickSort(a,lb,loc-1);
		QuickSort(a,loc+1,ub);
	}
}

int main(){
	int a[20],lb,ub,size,i;
	printf("\nEnter arry size: ");
	scanf("%d",&size);
	for(i=0;i<size;i++){
		printf("\nEnter value: ");
		scanf("%d",&a[i]);
	}
	lb=0;
	ub=size-1;
	QuickSort(a,lb,ub);
	printf("Sorted Array: ");
	for(i=0;i<size;i++){
		printf("%d ",a[i]);
	}
	return 0;
}
