<style>
.expandable {
  background: #fff;
  overflow: hidden;
  color: #000;   
  line-height: 50px;

  transition: all .5s ease-in-out;
  height: 0;
 }
 
 .expandable:target {
  height: 50px;
}

.nav-x-mg {
    margin-left: 24px;
    margin-right: 24px;
  }

  .nav-y-mg {
    margin-top: 16px;
    margin-bottom: 16px;
  }

@media (min-width: 992px) {
  .nav-x-mg {
    margin-left: 128px;
    margin-right: 128px;
  }
  .p-x-mg {
    padding-left: 128px;
    padding-right: 128px;
  }

  .nav-y-mg {
    margin-top: 16px;
    margin-bottom: 16px;
  }
}

.porto-radius {
    border-radius: 32px;
}

.image-scroll-wrapper {
    display: flex;
    gap: 1rem;
    overflow-x: auto;
    flex-wrap: nowrap;
    scroll-behavior: smooth;
    padding-bottom: 10px; /* agar tidak tertutup scrollbar */
}

/* Optional: hide scrollbar (Chrome, Safari) */
.image-scroll-wrapper::-webkit-scrollbar {
    height: 8px;
}
.image-scroll-wrapper::-webkit-scrollbar-thumb {
    background-color: #ccc;
    border-radius: 4px;
}



</style>

