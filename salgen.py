import Tkinter as tk
from functools import partial

def resultCalc(label_result,n1,n2,n3,):
	basic = float(n1.get())
  	labour = float(n2.get())
        tax   = float(n3.get())
        da = 0.05*basic
        hra = 0.5*basic + da
        med = 1250
        lta = 0.1*basic
        prov = 0.12*basic + da
        added = basic + da + hra + med + lta
        tax = tax*added/100
        labour=labour*added/100
        salary = added - tax - prov - labour
        label_result.config(text="Monthly Salary Predicted is %f" %salary)
    #	return  result

root =tk.Tk()
root.geometry('300x300')
root.title('Monthly Salary Predictor')

number1 = tk.StringVar()
number2 = tk.StringVar()
number3 = tk.StringVar()

labelSub1=tk.Label(root,text='Basic Pay ')
labelSub1.grid(row=1,column = 1)
labelSub2=tk.Label(root,text='Labour Welfare Fund(In Percentage) ')
labelSub2.grid(row=2,column = 1)
labelSub3=tk.Label(root,text='Professional Tax(In Percentage) ')
labelSub3.grid(row=3,column = 1)



entrySub1= tk.Entry(root,textvariable = number1)
entrySub1.grid(row=1,column =2)
entrySub2= tk.Entry(root,textvariable = number2)
entrySub2.grid(row=2,column =2)
entrySub3= tk.Entry(root,textvariable = number3)
entrySub3.grid(row=3,column =2)


labelResult= tk.Label(root)
labelResult.grid(row =10,column =2)


resultCalc = partial (resultCalc,labelResult,number1,number2,number3)
calcButton =tk.Button(root,text='Calculate',command = resultCalc)
calcButton.grid(row=9,column = 1)

root.mainloop()
