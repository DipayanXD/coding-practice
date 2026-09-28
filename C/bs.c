#include <stdio.h>

int binarysearch(int arr[], int low, int high, int key) {
  if (low > high)

    return -1;

  int mid = (low + high) / 2;

  if (arr[mid] == key)

    return mid;

  else if (arr[mid] > key)
    return binarysearch(arr, low, mid - 1, key);

  else
    return binarysearch(arr, mid + 1, high, key);
}
int main() {

  int arr[] = {1, 3, 5, 7, 9, 11}, key;

  int size = sizeof(arr);

  printf("Enter key to search: ");

  scanf("%d", &key);

  int res = binarysearch(arr, 0, size - 1, key);

  if (res != -1)

    printf("Found at index %d\n", res);

  else
    printf("Not found");

  return 0;
}
