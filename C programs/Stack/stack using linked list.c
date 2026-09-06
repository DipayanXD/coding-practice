// Stack using Linked List

#include <stdio.h>
#include <stdlib.h>

struct node
{
	int data;
	struct node *link;
};

struct node *top = NULL;

void push(int x){
	struct node *temp = (struct node *)malloc(sizeof(struct node));
	temp->data = x;
	temp->link = top;
	top = temp;
	printf("\nAfter pushed, string elements are:\n");	
}

void pop(){
	struct node *temp;
	
	if(top==NULL){
		printf("Stack Underflow!\n");
		return;
	}
	temp = top;
	top = top->link;
	temp->link = NULL;
	free(temp);
	printf("\nAfter popped, string elements are:\n");
}
void display()
{
	struct node *temp = top;
	if (top == NULL) {
        printf("Stack is empty\n");
        return;
    }
	while (temp != NULL)
	{
		printf("%d ", temp->data);
		temp = temp->link;
	}
}

int main(){
	int x,ch;
	while(1){
		printf("\n[1] PUSH\n[2] POP\n[3]Display \n[4]Exit");
		printf("\nChoose an operation: ");
		scanf("%d",&ch);
		switch(ch)
		{
			case 1:
				printf("Insert a data: ");
				scanf("%d",&x);
				push(x);
				display();
				break;
			case 2:
				pop();
				display();
				break;
			case 3:
				display();
				break;
			case 4:
				exit(1);
			
		}
		
	}
	return 0;
}

