// stack using array

#include<stdio.h>
int top=-1,size,stack[100];
void push(){
	int data;
	printf("Enter data to insert: ");
	scanf("%d",&data);
	if(top==size-1){
		printf("Stack overflow\n");
		return;
	}
	else{
		top++;
		stack[top]=data;
	}
}
void pop(){
	int data;
	if(top==-1){
		printf("Stack Underflow!");
	}
	else{
		data=stack[top];
		top--;
	}
	printf("Popped element: %d\n",data);
}
void display(){
	int i;
    if (top == -1) {
        printf("Stack is empty\n");
        return;
    }
	for(i=top;i>=0;i--){
		printf("%d ",stack[i]);
	}
}
int main(){
	int ch;
	printf("Enter stack size: ");
	scanf("%d", &size);
	while(1){
		printf("\n[1] PUSH\n[2] POP\n[3]Display \n[4]Exit");
		printf("\nChoose an operation: ");
		scanf("%d",&ch);
		switch(ch)
		{
			case 1:
				push();
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
