#DOC FILE
def TachDau():
	file=open("hello.txt","r")
	f=file.read()
	t=f.replace("."," .")
	print(t)
	file.close()
TachDau()
print()

#DEM CAC TU 
def Dem():
	file=open("hello.txt","r")
	f=file.read()
	con=f.split(" ")
	mang=[]
	for x in con:
		z=x.upper()
		mang.append(z)
	mang1=[]
	for y in mang:
		number=mang.count(y)
		mang1.append(y)
		if (mang1.count(y)<=1):
			print("Tu "+ y +" co "+str(number) +" tu")
	file.close()
	return mang
Dem()
print()
#IN CAC CAU O CAU B ra man hinh
def In():
	mang=Dem()
	file=open("hello.txt","w")
	mang1=[]
	for x in mang:
		nums=mang.count(x)
		mang1.append(x)
		if (mang1.count(x)<=1):
			f=file.write("Tu "+ x +" co "+str(nums) +" tu\n")
	file.close()
In()


	