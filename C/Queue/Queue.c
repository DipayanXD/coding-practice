#include<stdio.h>
#define MAX_SIZE  50
int queue[MAX_SIZE];
int front = -1,rear = -1;
void enQueue(int val)
{
	if (rear == MAX_SIZE - 1){
		printf("Queue OverFlow!\n");
		return;
	}
	else{
		if (rear == -1){
		front = 0;
		rear = 0;
		}else{
			rear++;
		}
	}
	queue[rear] = val;
	printf("%d Inserted.\n",val);
}	

void deQueue(){
	int val;
	if(front == -1){
		printf("Queue is underflow!\n");
	}
	
	val = queue[front];
	if (front == rear){
		front = -1;
		rear = -1;
	}else{
		front++;
	}
	printf("%d Deleted.\n",val);
}
void display(){
	if(front == -1 && rear ==-1){
		printf("Queue is empty!\n");
		return;
	}
	printf("Queue elements:");
	int i;
	for (i=front;i<=rear;i++){
		printf("%d ",queue[i]);
	}
}

int main(){
	int val, ch;
	while(1){
		printf("\n[1] Enqueue (PUSH)");
		printf("\n[2] Dequeue (POP)");
		printf("\n[3] Display");
		printf("\n[4] Exit");
		printf("\nEnter your choice: ");
		scanf("%d",&ch);
		switch(ch)
		{
			case 1:
				printf("Enter data to insert: ");
				scanf("%d",&val);
				enQueue(val);
				break;
			case 2:
				deQueue();
				break;
			case 3:
				display();
				break;
			case 4:
				return 0;
			default:
				printf("Invalid choice!\n");
		}
	}
	return 0;
}


