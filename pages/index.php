    <?php include "data.php"; ?>

    <h2 class="text-2xl font-semibold text-gray-900 mb-4">Daftar Makanan Indonesia</h2>
    <div class="grid grid-cols-4 gap-4">
        <?php
        foreach ($makanan as $item) {
        ?>
            <div class="rounded-lg bg-gray-100 p-4">
                <?php $img = trim($item['img']); ?>
                <img src="./img/<?= htmlspecialchars($img) ?>" class="w-full h-50" alt="">
                <h3 class="text-xl font-semibold text-gray-900 my-2"><?= $item['nama']; ?></h3>
                <p class="mt-2 text-md text-gray-700">Rp.<?= $item['harga']; ?></p>
            </div>
        <?php
        }
        ?>
    </div>