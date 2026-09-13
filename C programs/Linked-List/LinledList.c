#include<stdio.h>
#include<conio.h>
#include<stdlib.h>

struct node
{
	int data;
	struct node*link;
};



struct node*head;
void create(int n)
{
	struct node*temp, *newnode;
	int ele, i;
	head=(struct node*)malloc(sizeof(struct node));
	printf("Enter the data for node 1:");
	scanf("%d",&ele);
	head->data=ele;
	head->link=NULL;
	temp=head;
	for(i=2;i<=n;i++)
	{
		newnode=(struct node*)malloc(sizeof(struct node));
		printf("Enter the data for node %d:",i);
		scanf("%d",&ele);
		newnode->data=ele;
		newnode->link=NULL;
		temp->link=newnode;
		temp=temp->link;
	}
}

void insert_in_first_pos(int x)
{

	struct node*ptr; 
	printf("\n Enter the Value to insert in first position: ");
	scanf("%d",&x); 
	ptr=(struct node*)malloc(sizeof(struct node));
	ptr->data=x;
	ptr->link=head;
	head=ptr;
}

void insert_in_last_pos(int y)
{
	struct node*ptr;
	struct node*ptr1;
	printf("\n Enter the Value to insert in last position: ");
	scanf("%d",&y); 
	if(ptr==NULL){
		printf("Overflow!  No space in memory.");
	}
	else{
		ptr=(struct node*)malloc(sizeof(struct node));
		ptr->data=y;
		ptr->link=NULL;
		if (head==NULL){
			head=ptr;
		}
		ptr1=head;
		while(ptr1->link!=NULL){
			ptr1=ptr1->link;
		}
		ptr1->link=ptr;
	}

}

//void insert_in_specific_pos(int z, int pos)
//{
//	struct node*ptr;
//	struct node*ptr1;
//	printf("\n Enter the Value to insert: ");
//	scanf("%d",&z); 
//	if(ptr==NULL){
//		printf("Overflow!  No space in memory.");
//	}
//	else{
//		ptr=(struct node*)malloc(sizeof(struct node));
//		ptr->data=z;
//		if(head==NULL){
//			head=ptr;
//			ptr->link=NULL;
//		}
//		printf("Enter the position for the value: ");
//		scanf("%d",&pos);
//		int I =1;
//		ptr1=head;
//		while (I<pos){
//			ptr1=ptr1->link;
//			I++;
//		}
//		ptr->link=ptr1->link;
//		ptr1->link=ptr;
//	}
//}

void delete_first_node()
{
	struct node*ptr;
	if(head==NULL){
		printf("List is Empty.");
	}
	ptr=head;
	head=head->link;
	free(ptr);
}
void display()
{
	struct node*ptr;
	ptr=head;
	while(ptr!=0)
	{
		printf("Data=%d ",ptr->data);
		ptr=ptr->link;
	}
}

int main()
{
	int n,x,y,z,pos,del,ptr,ch;
	printf("Enter the size of node:");
	scanf("%d",&n);
	create(n);
	printf("\n[1] Display. \n[2] Insert a Node in first position. \n[3] Insert a Node in last position. \n[4] Delete a Node in first node.");
	printf("\nWhat opration you want?: ");
	scanf("%d", &ch);
	switch(ch){
		case 1:
			display();
			break;
		case 2:
			insert_in_first_pos(x);
			display();
			break;
		case 3:
			insert_in_last_pos(y);
			display();
			break;
		case 4:
			printf("Are you delete first node?( Y[1] / N[2] ): ");
			scanf("%d",&del);
			if(del==1){
				delete_first_node();
			}
			display();
			break;
	}
		
			
	
	
//	insert_in_specific_pos(z,pos);
	return 0;
}