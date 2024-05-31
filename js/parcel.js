const parentElement = document.getElementById("secondSwipper");
const secondSwiper = [
  {
    title: "Ship Like a Pro",
    body: "Get access to powerful and time-saving customizable features found only in MyG-EA+.",
    btn: "Create a Login and Ship",
    image: '/images/2.jpg'
  },
  {
    title: "G-EA for Business",
    body: "Get preferred rates, billing options and other great benefits of having a G-EA Express account! ",
    btn: "Open an Account",
    image: '/images/3.jpg'
  },
  {
    title: "Customs Regulatory Updates",
    body: "Stay utw-p-to-date on important customs regulations from around the world! ",
    btn: "View Latest Updates",
    image: '/images/4.png'
  },
  {
    title: "Not Home?  Change of Plans?",
    body: "Take control of your shipment delivery!  Decide when and where you want us to deliver.",
    btn: "Learn About Delivery Management",
    image: '/images/5.jpg'
  },
  {
    title: "Ship with Peace of Mind",
    body: "We offer options to protect packages and documents on the way to their final destination.",
    btn: "Explore Shipment Protection Options",
    image: '/images/6.jpg'
  },
  {
    title: "Are Batteries Included?",
    body: "Lithium and Ion Batteries are classified as Dangerous Goods. Ensure you know the rules before you ship. ",
    btn: "Understanding Dangerous Goods",
    image: '/images/9.jpg'
  },
  {
    title: "Flexibility for Whatever You Need",
    body: " Get your shipment delivered exactly the way you want! We offer flexible additional services that cater to a variety of shipment needs.",
    btn: "Learn About Optional Services",
    image: '/images/7.jpg'
  },
];

const divArray = secondSwiper.map((data) => {
  const divElement = document.createElement("div");
  divElement.classList.add("swiper-slide");
  divElement.innerHTML = `
      <div class='tw-rounded-lg tw-overflow-hidden tw-max-w-sm tw-mx-auto tw-shadow-lg tw-h-full ' >
        <div class="tw-h-[210px]  tw-bg-[url('')"><img class='tw-h-full tw-w-full tw-object-cover tw-object-center' src='${data.image}' /></div>
          <div class='tw-bg-white tw-h-[200px] tw-flex  tw-flex-col tw-p-4'>
          <div class=''>
          <p class='tw-font-bold tw-text-lg tw-leading-tight'>${data.title}</p>
          <p>${data.body}</p>
          </div>
            <a class="tw-text-primary tw-mt-auto tw-self-end " href="#">${data.btn}</a>
          </div>
          
          
      </div>

`;
  return divElement;
});
divArray.forEach((div) => {
  parentElement.appendChild(div);
});
