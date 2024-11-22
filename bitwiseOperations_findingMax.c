#include <stdio.h>
#include <string.h>
#include <math.h>
#include <stdlib.h>
//Complete the following function.


void calculate_the_maximum(int n, int k) {
  //Write your code here.
    int  andFmax = 0 , orFmax=0 ,xorFmax=0 ;
    
    int  andOp = 0 ;
    int  orOp  = 0 ;
    int  xorOp = 0 ;
    
    for(int a=1; a<n; a++){
        
        
        for (int b=a+1 ; b<=n ;b++){
               
              andOp = a & b ;
    
             if (andOp < k && andOp > andFmax){
                 andFmax = andOp ;
             }
             
             orOp = a | b ;
             if (orOp<k  &&  orOp>orFmax){
                 orFmax = orOp ;
             }
              
             xorOp = a ^ b ;
             if (xorOp < k && xorOp > xorFmax){
                 xorFmax = xorOp ;
             }
               
        }   
    }
   printf("%d\n%d\n%d",andFmax,orFmax,xorFmax);
}

int main() {
    int n, k;
  
    scanf("%d %d", &n, &k);
    calculate_the_maximum(n, k);
 
    return 0;
}
