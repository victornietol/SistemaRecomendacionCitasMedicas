from argparse import ArgumentParser

sintomas = ArgumentParser()
sintomas.add_argument('-n', '--names-list',nargs='+', default=[])
sintomas = sintomas.parse_args()
sintomas = sintomas._get_kwargs()[0][1]

#Sintomas cardiobasculares generales
sintomasCardio = set(["dolorPecho","dificultadRespirar","frioPiernas","frioBrazos","dolorEspalda","dolorCuello"])
#Sintomas cardiobasculaes generales
sintomasEndocrino = set(["fatiga","hormigueoExtremidades","perdidaPeso","insomnio","aumentoPeso"])
#Sintomas Generales
sintomasGeneral = set(["tos","congestionNasal","dolorGarganta","fiebre","dolorCabeza","enrojecimientoPiel","inflamacionPiel","dolorOrinar","vomitos","diarrea"])
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
valores_ord = dict(sorted(valores.items(), key=lambda item: item[1],reverse=True))
print(list(valores_ord.keys())[0])

