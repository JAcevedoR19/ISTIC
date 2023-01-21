from tkinter import *

Inventario={" ":{"Precio":0,"Stock":0}}

Carrito={}
#Funciones:
def MercadoStock():
  def Salir():
    Ventana.destroy()
  def VerInventario():
    for i in Inventario:
      etiqueta = Label(Ventana,text=i+":"+" Precio: "+str(Inventario[i]["Precio"])+"$"+" Stock: "+str(Inventario[i]["Stock"])).pack(anchor=NW)    
  Ventana=Tk()
  Ventana.title("Ver Stock")
  Ventana.geometry("380x300+100+100")
  Ventana.config(bg="orange")
  botonVI=Button(Ventana, text = "Ver Stock", fg = "black", width = 10, height = 2, bd = 0, bg = "light green", cursor = "hand2",command = VerInventario)
  botonVI.pack()
  botonVI.place(x=75,y=250)
  botonS=Button(Ventana, text = "Salir", fg = "black", width = 10, height = 2, bd = 0, bg = "red", cursor = "hand2",command = Salir)
  botonS.pack()
  botonS.place(x=200,y=250)  

def AgregaralStock():  
  def Agregar():    
    global Inventario
    TInventario={"Precio":0,"Stock":0}
    try:
      Producto=str(nombreEntrada.get())
      Cantidad=int(nombreEntrada2.get())
      Precio=int(nombreEntrada3.get())
      TInventario["Precio"]=Precio
      TInventario["Stock"]=Cantidad 
      Inventario.setdefault(Producto,TInventario) 
      Ventana1.destroy()
    except ValueError:
      Aviso.config(text="Debe ingresar algun dato")
        
  Ventana1=Tk()
  Ventana1.geometry("380x200+100+100")
  Ventana1.title("Agregar al Inventario")
  Ventana1.config(bg="orange")
  Aviso = Label(Ventana1, text=" ")
  Aviso.pack()
  Aviso.place(x=120,y=150)
  etiqueta = Label(Ventana1, text="Nombre: ")
  etiqueta.pack()
  etiqueta.place(x=20,y=20)
  etiqueta1 = Label(Ventana1, text="Stock: ")
  etiqueta1.pack()
  etiqueta1.place(x=20,y=40)
  etiqueta2 = Label(Ventana1, text="Precio: ")
  etiqueta2.pack()
  etiqueta2.place(x=20,y=60)
  nombreEntrada=Entry(Ventana1)
  nombreEntrada.pack()
  nombreEntrada.place(x=120,y=20)
  nombreEntrada2=Entry(Ventana1)
  nombreEntrada2.pack()
  nombreEntrada2.place(x=120,y=40)
  nombreEntrada3=Entry(Ventana1)
  nombreEntrada3.pack()
  nombreEntrada3.place(x=120,y=60)
  botonI=Button(Ventana1, text = "Agregar", fg = "black", width = 10, height = 2, bd = 0, bg = "green", cursor = "hand2", command = Agregar)
  botonI.pack()
  botonI.place(x=150,y=100)
  
def BuscarProducto():
  def Salir():
    Ventana2.destroy()
  def Buscar():
    Producto=str(nombreEntrada.get())
    if Inventario.get(Producto):      
      Aviso.config(text=Producto+":"+" Stock: "+str(Inventario[Producto]["Stock"])+" Precio: "+str(Inventario[Producto]["Precio"])+"$")
    else:      
      Aviso.config(text="Producto no encontrado.")
  Ventana2=Tk()
  Ventana2.geometry("380x150+100+100")
  Ventana2.title("Buscar Producto")
  Ventana2.config(bg="orange")
  Aviso=Label(Ventana2,text=" ")
  Aviso.pack()
  Aviso.place(x=80,y=60)
  etiqueta=Label(Ventana2,text="Nombre: ")
  etiqueta.pack()
  etiqueta.place(x=20,y=20)
  nombreEntrada=Entry(Ventana2)
  nombreEntrada.pack()
  nombreEntrada.place(x=100,y=20)
  botonB=Button(Ventana2, text = "Buscar", fg = "black", width = 10, height = 2, bd = 0, bg = "light green", cursor = "hand2",command = Buscar)
  botonB.pack()
  botonB.place(x=70,y=100)
  botonS=Button(Ventana2, text = "Salir", fg = "black", width = 10, height = 2, bd = 0, bg = "red", cursor = "hand2",command = Salir)
  botonS.pack()
  botonS.place(x=180,y=100)
  
def AgregaralCarrito():
  def Salir():
    Ventana3.destroy()
  def Agregar():
    global TCarrito
    TCarrito={"Precio":0,"Stock":0}
    try:
      NProducto=str(nombreEntrada.get())
      NCantidad=int(nombreEntrada2.get())
      if (Inventario.get(NProducto)):
        Aviso.config(text="Hay disponibilidad")
        if ((Inventario[NProducto]["Stock"])>NCantidad):
          Aviso1.config(text="Hay stock disponible")
          TCarrito["Stock"]=NCantidad
          TCarrito["Precio"]=Inventario[NProducto]["Precio"]
          Carrito.setdefault(NProducto,TCarrito)
        else:
          Aviso1.config(text="No se puede dicha cantidad")        
      else:
        Aviso.config(text="No hay stock")
    except ValueError:
      Aviso1.config(text="Debe ingresar algún dato")
  
  Ventana3=Tk()
  Ventana3.geometry("380x150+100+100")
  Ventana3.title("Agregar al Carrito")
  Ventana3.config(bg="orange")
  Aviso = Label(Ventana3, text=" ")
  Aviso.pack()
  Aviso.place(x=20,y=60)
  Aviso1 = Label(Ventana3, text=" ")
  Aviso1.pack()
  Aviso1.place(x=20,y=80)
  etiqueta = Label(Ventana3, text="Nombre: ")
  etiqueta.pack()
  etiqueta.place(x=20,y=20)
  etiqueta1 = Label(Ventana3, text="Stock: ")
  etiqueta1.pack()
  etiqueta1.place(x=20,y=40)
  nombreEntrada=Entry(Ventana3)
  nombreEntrada.pack()
  nombreEntrada.place(x=100,y=20)
  nombreEntrada2=Entry(Ventana3)
  nombreEntrada2.pack()
  nombreEntrada2.place(x=100,y=40)
  botonC=Button(Ventana3, text = "Agregar", fg = "black", width = 10, height = 2, bd = 0, bg = "light green", cursor = "hand2", command = Agregar)
  botonC.pack()
  botonC.place(x=70,y=100)
  botonS=Button(Ventana3, text = "Salir", fg = "black", width = 10, height = 2, bd = 0, bg = "red", cursor = "hand2",command = Salir)
  botonS.pack()
  botonS.place(x=180,y=100)

def EliminarDelCarrito():
  def Salir():
    Ventana4.destroy()
  def Eliminar():
    global Carrito
    NProducto=str(nombreEntrada.get())
    if Carrito.get(NProducto):
      del Carrito[NProducto]
      Aviso.config(text="Producto eliminado")
    else:
      Aviso.config(text="El producto no está en el carrito")
  Ventana4=Tk()
  Ventana4.geometry("380x150+100+100")
  Ventana4.title("Eliminar productos del carrito")
  Ventana4.config(bg="orange")
  Aviso=Label(Ventana4,text=" ")
  Aviso.pack()
  Aviso.place(x=80,y=50) 
  etiqueta = Label(Ventana4, text="Nombre: ")
  etiqueta.pack()
  etiqueta.place(x=20,y=20)
  nombreEntrada=Entry(Ventana4)
  nombreEntrada.pack()
  nombreEntrada.place(x=100,y=20)
  botonCL=Button(Ventana4, text = "Eliminar", fg = "black", width = 10, height = 2, bd = 0, bg = "light green", cursor = "hand2", command = Eliminar)
  botonCL.pack()
  botonCL.place(x=70,y=100)
  botonS=Button(Ventana4, text = "Salir", fg = "black", width = 10, height = 2, bd = 0, bg = "red", cursor = "hand2",command = Salir)
  botonS.pack()
  botonS.place(x=180,y=100)
  
def VerCarrito():
  def Salir():
    Ventana5.destroy()
  def VerCarrito():    
    for i in Carrito:
      etiqueta = Label(Ventana5, text=i+":"+" Precio: "+str(Carrito[i]["Precio"])+"$"+" Stock: "+str(Carrito[i]["Stock"])).pack(anchor=NW)    
  Ventana5=Tk()
  Ventana5.geometry("380x300+100+100")
  Ventana5.title("Carrito de Compras")
  Ventana5.config(bg="orange")
  botonVC=Button(Ventana5, text = "Ver Carrito", fg = "black", width = 10, height = 2, bd = 0, bg = "light green", cursor = "hand2",command = VerCarrito)
  botonVC.pack()
  botonVC.place(x=75,y=250)
  botonS=Button(Ventana5, text = "Salir", fg = "black", width = 10, height = 2, bd = 0, bg = "red", cursor = "hand2",command = Salir)
  botonS.pack()
  botonS.place(x=200,y=250)  


def PagarCarrito():
  def VaciarCarrito():
    Carrito.clear()
  def Salir():
    Ventana6.destroy()
  def Pagar():
    Total=0
    global Carrito
    for PC in Carrito:
      for PI in Inventario:
        if PC==PI:
          Total=Total+(Carrito[PC]["Stock"]*Carrito[PC]["Precio"])
          Inventario[PI]["Stock"]=Inventario[PI]["Stock"]-Carrito[PC]["Stock"]  
    Aviso.config(text="Gastaste un total de: "+str(Total)+"$")
    Aviso1.config(text="Gracias por su compra.")    
    
  Ventana6=Tk()
  Ventana6.geometry("380x150+100+100")
  Ventana6.title("Pagar Compra")
  Ventana6.config(bg="orange")
  Aviso=Label(Ventana6,text=" ")
  Aviso.pack()
  Aviso.place(x=115,y=20)
  Aviso1=Label(Ventana6,text=" ")
  Aviso1.pack()
  Aviso1.place(x=80,y=40)
  botonP=Button(Ventana6, text = "Pagar", fg = "black", width = 10, height = 2, bd = 0, bg = "light blue", cursor = "hand2", command = Pagar)
  botonP.pack()
  botonP.place(x=20,y=100)
  botonS=Button(Ventana6, text = "Salir", fg = "black", width = 10, height = 2, bd = 0, bg = "red", cursor = "hand2",command = Salir)
  botonS.pack()
  botonS.place(x=250,y=100)
  botonVC=Button(Ventana6, text = "Vaciar Carrito", fg = "black", width = 10, height = 2, bd = 0, bg = "orange", cursor = "hand2",command = VaciarCarrito)
  botonVC.pack()
  botonVC.place(x=135,y=100)
 
def GuardarySalir():
  Inv=open("Listaproductos.txt","w")
  for i in Inventario:
    Inv.write(str(i))
    Inv.write(" ")
    for j in Inventario[i]:
      Inv.write(str(Inventario[i][j]))
      Inv.write(" ")
    Inv.write("\n")
  Inv.close()
  raiz.destroy()

def LeerInventario():
  global Inventario
  Inventario={}
  Inv=open("Listaproductos.txt","r")
  Productos = Inv.readlines()
  Inv.close()
  for Prod in Productos:
    Separar=Prod.split()
    Inven=Separar[0]
    Inven1={"Precio":int(Separar[1]),"Stock":int(Separar[2])}
    Inventario.setdefault(Inven,Inven1)
  return Inventario
              

#Inventario:
LeerInventario()

#Ventana de inicio:
raiz = Tk()
raiz.title("Mercado Yang Yeng Ying Yong Yung")
raiz.geometry("650x500")
raiz.config(bg="light green")
raiz.resizable(0,0)

#Logo:
imagen = PhotoImage(file="jumbo.png")
logo_frame = Frame(raiz, width = 50, height = 50, bd = 0, bg="black")
logo_frame.pack(side = TOP)
Label(logo_frame, image=imagen).pack()

#Botones:
boton_frame = Frame(raiz, width = 500, height = 200, bd = 0, bg="green")
boton_frame.pack(side = TOP)

VerInventario=Button(boton_frame, text = "Ver Stock", fg = "black", width =15, height = 1, bd = 3, bg = "#fff", cursor = "hand2", command = MercadoStock).grid(row = 2, column = 0, padx = 10, pady = 10)

AgregaralStock=Button(boton_frame, text = "Agregar Stock", fg = "black", width = 15, height = 1, bd = 3, bg = "#fff", cursor = "hand2", command = AgregaralStock).grid(row = 2, column = 1, padx = 10, pady = 10)

BuscarProducto=Button(boton_frame, text = "Buscar Producto", fg = "black", width = 15, height = 1, bd = 3, bg = "#fff", cursor = "hand2", command = BuscarProducto).grid(row = 3, column = 0, padx = 10, pady = 10)

AgregaralCarrito=Button(boton_frame, text = "Agregar al Carrito", fg = "black", width = 15, height = 1, bd = 3, bg = "#fff", cursor = "hand2", command = AgregaralCarrito).grid(row = 3, column = 1, padx = 10, pady = 10)

EliminarProductosdelCarrito=Button(boton_frame, text = "Eliminar del Carrito", fg = "black", width = 15, height = 1, bd = 3, bg = "#fff", cursor = "hand2", command = EliminarDelCarrito).grid(row = 4, column = 0, padx = 10, pady = 10)

VerCarrito=Button(boton_frame, text = "Ver Carrito", fg = "black", width = 15, height = 1, bd = 3, bg = "#fff", cursor = "hand2", command = VerCarrito).grid(row = 4, column = 1, padx = 10, pady = 10)

PagarCarrito=Button(boton_frame, text = "Pagar", fg = "black", width = 15, height = 1, bd = 3, bg = "light blue", cursor = "hand2", command = PagarCarrito).grid(row = 5, column = 0, padx = 10, pady = 10)

GuardarySalir=Button(boton_frame, text = "Salir", fg = "black", width = 15, height = 1, bd = 3, bg = "red", cursor = "hand2", command = GuardarySalir).grid(row = 5, column =1 , padx = 10, pady = 10)

raiz.mainloop()