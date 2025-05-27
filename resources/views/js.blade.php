<script>
    function toggleSection(descId, imgIds, iconId, others) {
        const desc = document.getElementById(descId);
        const icon = document.getElementById(iconId);
        const isVisible = desc.style.display === 'block';

        others.forEach(({ desc, imgs, icon }) => {
            const d = document.getElementById(desc);
            d.style.display = 'none';
            d.style.maxHeight = null;
            imgs.forEach(id => document.getElementById(id).style.display = 'none');
            document.getElementById(icon).classList.remove('bi-chevron-up');
            document.getElementById(icon).classList.add('bi-chevron-down');
        });

        if (isVisible) {
            desc.style.display = 'none';
            imgIds.forEach(id => document.getElementById(id).style.display = 'none');
            icon.classList.remove('bi-chevron-up');
            icon.classList.add('bi-chevron-down');
        } else {
            desc.style.display = 'block';
            imgIds.forEach(id => document.getElementById(id).style.display = 'block');
            icon.classList.remove('bi-chevron-down');
            icon.classList.add('bi-chevron-up');
        }
    }

    document.getElementById('toggleBtn1').addEventListener('click', function () {
        toggleSection('descText1', ['img1-1', 'img1-2', 'img1-3'], 'arrowIcon1', [
            { desc: 'descText2', imgs: ['img2-1', 'img2-2', 'img2-3'], icon: 'arrowIcon2' },
            { desc: 'descText3', imgs: ['img3-1', 'img3-2', 'img3-3'], icon: 'arrowIcon3' },
            { desc: 'descText4', imgs: ['img4-1', 'img4-2', 'img4-3'], icon: 'arrowIcon4' }
        ]);
    });

    document.getElementById('toggleBtn2').addEventListener('click', function () {
        toggleSection('descText2', ['img2-1', 'img2-2', 'img2-3'], 'arrowIcon2', [
            { desc: 'descText1', imgs: ['img1-1', 'img1-2', 'img1-3'], icon: 'arrowIcon1' },
            { desc: 'descText3', imgs: ['img3-1', 'img3-2', 'img3-3'], icon: 'arrowIcon3' },
            { desc: 'descText4', imgs: ['img4-1', 'img4-2', 'img4-3'], icon: 'arrowIcon4' }
        ]);
    });

    document.getElementById('toggleBtn3').addEventListener('click', function () {
        toggleSection('descText3', ['img3-1', 'img3-2', 'img3-3'], 'arrowIcon3', [
            { desc: 'descText1', imgs: ['img1-1', 'img1-2', 'img1-3'], icon: 'arrowIcon1' },
            { desc: 'descText2', imgs: ['img2-1', 'img2-2', 'img2-3'], icon: 'arrowIcon2' },
            { desc: 'descText4', imgs: ['img4-1', 'img4-2', 'img4-3'], icon: 'arrowIcon4' }
        ]);
    });

    document.getElementById('toggleBtn4').addEventListener('click', function () {
        toggleSection('descText4', ['img4-1', 'img4-2', 'img4-3'], 'arrowIcon4', [
            { desc: 'descText1', imgs: ['img1-1', 'img1-2', 'img1-3'], icon: 'arrowIcon1' },
            { desc: 'descText2', imgs: ['img2-1', 'img2-2', 'img2-3'], icon: 'arrowIcon2' },
            { desc: 'descText3', imgs: ['img3-1', 'img3-2', 'img3-3'], icon: 'arrowIcon3' }
        ]);
    });
</script>