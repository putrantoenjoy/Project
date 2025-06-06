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


.btn-more {
    
    border: 2px, solid;
    border-color: #000000;
    border-radius: 24px;

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

.footer-tittle-res {
  font-size: clamp(36px, 5vw, 72px);
}

/* .btn-hover-more {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}
.btn-hover-more:hover {
  background-color: #555555;
  color: white;
  } */
  
.btn-more:hover {    
  background-color: #000000;
  color: white;
}

.btn-light:hover {
  background-color: #000067;
  color: white;
}

/* other */
@media (min-width: 0px) {
  .page-font-res {
    font-size: 32px;
  }
  .tittle-font-res {
    font-size: 24x;
  }
  .desc-font-res{
    font-size: 12px;
  }
  .footer-a-res {
    flex-direction: column;
    justify-content: center;
    text-align: center;
  }
  .footer-img-res {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 3rem;
    justify-content: center;
  }
  .box-p-res {
    padding: 0px;
  }
  .br-radius-res {
    border-radius: 16px;
  }
  .flex-jus-center {
    display: flex;
    flex-direction: row;
    justify-content: center;
  }
}
/* phone */
  @media (min-width: 576px) {
    .page-font-res {
      font-size: 32px;
    }
    .tittle-font-res {
      font-size: 24x;
    }
    .desc-font-res{
      font-size: 12px;
    }
    .footer-res {
      /* display: flex;
      flex-wrap: wrap;
      justify-content: space-between; */
    }
    .footer-a-res {
      flex-direction: column;
      justify-content: center;
      text-align: center;
    }
    .footer-img-res {
      display: flex;
      flex-wrap: wrap;
      margin-bottom: 3rem;
      justify-content: center;
    }
    .box-p-res {
      padding: 0px;
    }
    .br-radius-res {
      border-radius: 16px;
    }
    .flex-jus-center {
      display: flex;
      flex-direction: row;
      justify-content: center;
    }
  }
  /* tablet */
  @media (min-width: 768px) {
    .page-font-res {
      font-size: 48px;
    }
    .tittle-font-res {
      font-size: 32px;
    }
    .desc-font-res{
      font-size: 14px;
    }
    .footer-res {
      /* display: flex;
      flex-wrap: wrap;
      justify-content: space-between; */
    }
    .footer-a-res {
      flex-direction: column;
      justify-content: center;
      text-align: center;
    }
    .footer-img-res {
      display: flex;
      flex-wrap: wrap;
      margin-bottom: 3rem;
      justify-content: center;
    }
    .box-p-res {
      padding: 0px;
    }
    .br-radius-res {
      border-radius: 24px;
    }
    .flex-jus-center {
      display: flex;
      flex-direction: row;
      justify-content: center;
    }
  }
  /* laptop */
  @media (min-width: 992px) {
    .nav-x-mg {
      margin-left: 128px;
      margin-right: 128px;
    }
    .p-x-mg {
      padding-left: 128px;
      padding-right: 128px;
    }
  
    .page-font-res {
      font-size: 72px;
    }
    .tittle-font-res {
      font-size: 36px;
    }
    .desc-font-res{
      font-size: 16px;
    }
    .nav-y-mg {
      margin-top: 16px;
      margin-bottom: 16px;
    }
    
    .footer-res {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    .footer-a-res {
      display: flex;
      flex-wrap: wrap;
      flex-direction: row;
      justify-content: end;
    }
    .footer-img-res {
      display: flex;
      flex-wrap: wrap;
      margin-bottom: 0rem;
      justify-content: center;
    }
    .box-p-res {
      padding-left: 16px;
      padding-right: 16px;
    }
    .br-radius-res {
      border-radius: 24px;
    }
    .flex-jus-center {
      display: flex;
      flex-direction: row;
      justify-content: flex-start;
    }
  }
</style>

