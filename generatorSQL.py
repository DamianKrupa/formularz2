# for n in range(1, 24):
#     print(f"UPDATE `attende` SET `password`='haslo{n}' WHERE `id`={n};")


slownik = {'damian': 12,
'syliwa': 13,
'melisa': [x for x in range(10)],
'markol': list(map(lambda x: x**2,
 [x for x in range(3)]))}
print(slownik['markol'])

#de Morgan
print(True & True)
print(True | True)

print(False & False)
print(False | False)

print(False & True)
print(False | True)


