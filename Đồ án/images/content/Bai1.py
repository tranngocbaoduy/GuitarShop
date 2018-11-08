#CAU1
def IsPrime(n):
	if (n<=0):
		return False
	count=0
	a=list(range(1,n+1))
	for i in a:
		if (n%i==0):
			count=count+1
	if (count!=2):
		return False
	return True
	
def PrintPrime(n):
	a=range(0,n)
	for i in a:
		if ( IsPrime(i) ):
			print(str(i))
n=100
PrintPrime(n)

#CAU2
def List_Prime(n):
	a=range(2,n)
	array=[]
	for i in a:
		if (IsPrime(i)):
			array.append(i)
	return array

def Factorial(n):
	m=n
	array=List_Prime(m)
	mang=[]
	for i in array:
		if (m%i==0):
			while(m%i==0):
				m=m/i
				mang.append(i)
	y=0
	mang1=[]
	mang2=[]
	for x in mang:
		y=mang.count(x)
		mang2.append(x)
		if (mang2.count(x)<=1):
			a=str(x)+"^"+str(y)
			mang1.append(a)
	print("so "+str(n)+" tach thanh "+"*".join(mang1))
		
Factorial(50)
#CAU3
def GCLE(a,b):
	if (a==b):
		return a
	if (a<b):
		a,b=b,a
	while (a%b!=0):
		r=a%b
		a=b
		b=r
	return b
	
def GCLT(a,b): 
	if (a==b):
		return a
	if (a<b):
		a,b=b,a
	while(a!=b):
		d=a
		a=b
		b=d-b
	return a
print ("UCLN cua 2 so 45 va 30 theo Euclid la "+str(GCLE(30,45)))
print ("UCLN cua 2 so 45 va 30 theo phuong phap tru la "+str(GCLT(30,45)))


		
		
	