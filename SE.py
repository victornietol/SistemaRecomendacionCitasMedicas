from argparse import ArgumentParser

sintomas = ArgumentParser()
sintomas.add_argument('-n', '--names-list',nargs='+', default=[])
sintomas = sintomas.parse_args()
sintomas = sintomas._get_kwargs()[0][1]

#Sintomas cardiobasculares generales
sintomasCardio = set(["dolorPecho","faltaDeAire","frioPiernas","frioBrazos","dolorEspalda","dolorCuello"])
#Sintomas cardiobasculaes generales
sintomasEndocrino = set(["cansancio","hormigueoExtremidades","pérdidaPeso ","insomnio","aumentoPeso"])
#Sintomas Generales
sintomasGeneral = set(["tos","moqueos","dolorGarganta","fiebre","dolorCabeza","enrojecimientoPiel","inflamacionPiel","dolorOrinar"])
#Sintomas del usuario


card = 0
end = 0
gen = 0
for i in sintomas:
  if i in sintomasCardio:
    card +=1
  if i in sintomasEndocrino:
    end +=1
  if i in sintomasGeneral:
    gen +=1

valores = {'Cardiologo':card,'Endocrinologo':end,'General':gen}
valores_ord = {k: v for k, v in sorted(valores.items(),reverse=True)}
print(list(valores_ord.keys())[0])

