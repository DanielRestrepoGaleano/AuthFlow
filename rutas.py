import os

def generar_arbol(ruta, prefijo=""):
   
    contenido = sorted(os.listdir(ruta))
    resultado = []
    for i, nombre in enumerate(contenido):
        ruta_completa = os.path.join(ruta, nombre)
        es_ultimo = (i == len(contenido) - 1)

        conector = "└── " if es_ultimo else "├── "
        resultado.append(f"{prefijo}{conector}{nombre}")

        if os.path.isdir(ruta_completa):
            extension = "    " if es_ultimo else "│   "
            resultado.extend(generar_arbol(ruta_completa, prefijo + extension))

    return resultado

def guardar_estructura(ruta_proyecto, archivo_salida="estructura_proyecto.txt"):
    arbol = ["/"]
    arbol.extend(generar_arbol(ruta_proyecto))
    
    with open(archivo_salida, "w", encoding="utf-8") as f:
        f.write("\n".join(arbol))
    
    print(f"Estructura guardada en {archivo_salida}")

if __name__ == "__main__":
    ruta = "."  
    guardar_estructura(ruta)
