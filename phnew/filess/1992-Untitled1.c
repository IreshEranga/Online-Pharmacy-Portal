#include <stdio.h>
#include <math.h>

int main()
{
	
	//variable declaration
	float mark1,mark2,mark3,mark4,mark5,mark6,mark7,mark8,mark9,mark10, sum, avg, y,z,deviation;
	
	//get user inputs
	
	printf("Enter student 1 marks : ");
	scanf("%f", &mark1);
	
	printf("Enter student 2 marks : ");
	scanf("%f", &mark2);
	
	printf("Enter student 3 marks : ");
	scanf("%f", &mark3);
	
	printf("Enter student 4 marks : ");
	scanf("%f", &mark4);
	
	printf("Enter student 5 marks : ");
	scanf("%f", &mark5);
	
	printf("Enter student 6 marks : ");
	scanf("%f", &mark6);
	
	printf("Enter student 7 marks : ");
	scanf("%f", &mark7);
	
	printf("Enter student 8 marks : ");
	scanf("%f", &mark8);
	
	printf("Enter student 9 marks : ");
	scanf("%f", &mark9);
	
	printf("Enter student 10 marks : ");
	scanf("%f", &mark10);
	
	sum = (mark1 + mark2 + mark3 + mark4 + mark5 + mark6 + mark7 + mark8 + mark9 + mark10);
	
	printf("\nSum : %.2f \n", sum);
	
	avg = sum/10.0;
	
	printf("Average : %.2f \n", avg);
	
	//caculate standard deviation
	y = ((mark1 - avg)*(mark1 - avg) + (mark2 - avg)*(mark2 - avg) +(mark3 - avg)*(mark3 - avg) +(mark4 - avg)*(mark4 - avg) +(mark5 - avg)*(mark5 - avg) +(mark6 - avg)*(mark6 - avg) +(mark7 - avg)*(mark7 - avg) +(mark8 - avg)*(mark8 - avg) +(mark9 - avg)*(mark9 - avg) +(mark10 - avg)*(mark10 - avg));
	
	z = y/9.0;
	
	deviation = sqrt(z);
	
	printf("Standard deviation of students marks : %.4f ", deviation);
	
	return 0;
}
