#include <stdio.h>

int mayor(int num1, int num2, int num3, int num4){
  int ar[4]= {num1, num2, num3, num4};
  int max = ar[0];
  for (int i=0; i<4; i++){
    if(ar[i]>max){
      max= ar[i];
    }
  }
  return max;
}

int main(){
  int num1, num2, num3, num4;
  int res = mayor(3, 34, 20, 9);
  printf("%d", res);

  return 0;
}
