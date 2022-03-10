for n in range(1, 24):
    print(f"UPDATE `attende` SET `password`='haslo{n}' WHERE `id`={n};")