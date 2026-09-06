//Single Linear Linked List (SLLL)
#include<stdio.h>
#include<stdlib.h>
//Declaration of SLLL
struct node{
	int data;
	struct node *next;
};
//Initialization of two Pointers
struct node *head = NULL;
struct node * tail = NULL;
//Create
void create(int data){
	struct node *newNode = (struct node*)malloc(sizeof(struct node));
	newNode->data = data;
	newNode->next = NULL;
	if(head == NULL){		// Creating first node
		head = newNode;
		tail = newNode;
	}
	else{		// Creating other nodes
		tail->next=newNode;
		tail=newNode;
	}
}
