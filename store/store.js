// data
const products = [
  { id: 1, description: "Nursery Pot", price: 395, img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTY_2Us1fNArX_7s5Djo6RG4NObXQQNCYe7zD2_VKotyZ1CgwwbOz8V7jr9Oj27T1ZzinUFtCU&usqp=CAc"},
  { id: 2, description: 'Vermi Compost', price: 500, img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCawKdJX13KZiyYRS2MaUZ8pwirvkLt8DtPg&usqp=CAU"},
  { id: 3, description: 'Compost Accelerator', price: 585, img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRq7m1hmHUYX02jcIgp0-jsCgDzCVfZbDIv5Q&usqp=CAU" },
  { id: 4, description: 'Blossom of the sky Preserved', price: 998, img: "https://cdn.shopify.com/s/files/1/0284/2450/products/Blossoms_of_the_sky_1_500x.jpg?v=1570793891" },
  { id: 5, description: 'Haworthia Attenuata', price: 885, img: "https://cdn.shopify.com/s/files/1/0284/2450/products/IMG_9955_300x.jpg?v=1594117088"},
  { id: 6, description: 'Kokedama Moss Ball - Pearls & Jade Pothos', price: 894, img: "https://cdn.shopify.com/s/files/1/0284/2450/products/pearl_jade_pothos_1_500x.jpg?v=1609152082"},
  { id: 7, description: 'Root Rooting Compound', price: 1500, img: "https://www.gardeners.com/globalassets/product-catalog/8609533/8609533_01v.jpg?w=216&h=280" },
  { id: 8, description: 'Organic Seed Starting Mix', price: 180, img: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTY_2Us1fNArX_7s5Djo6RG4NObXQQNCYe7zD2_VKotyZ1CgwwbOz8V7jr9Oj27T1ZzinUFtCU&usqp=CAc'},
  { id: 9, description: 'Wattering Can', price: 340, img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8KlzV4BQQQLtf-z9RFPp_14GwQbYeJQslcQ&usqp=CAU"},
  { id: 10, description: 'Stainless Steel Border Spade', price: 649, img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLYDAPMsDdQXEBFLBtWMKHMaLIVrJANElS-IduG1NeAtiDbo0NQmd5NJLC2BspmcbN_kE&usqp=CAU"},
  { id: 11, description: 'Potting Trowel', price: 399, img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRP-fLuHAjBwKHP2VNAmynYl4v86oK6UY8y15S5_RXq_U65EXNJiv2txr30IINujfkbe1Y&usqp=CAU"},
  { id: 12, description: 'Grafting Tool', price: 700, img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrIVy7dYslx4ykKFYFSBRSn8JlH_dDXi5vvg&usqp=CAU" },
  { id: 13, description: 'Water Spray', price: 200, img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEybq632vVFLa7Nq0m-Y7OH2aj3edfYO31Dg&usqp=CAU" },
  { id: 14, description: 'Tamato Seeds', price: 199, img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCn1-eyKJXe2BqStqnUO407u6DTW2bxmgbKg&usqp=CAU"}
];
 
// component 
const Home = {
  template: '#home', 
  name: 'Home',
  data: () => {
    return {
      products, 
      searchKey: '',
      liked: [],
      cart: []
    }
  },
  computed: {
    filteredList() {
      return this.products.filter((product) => {
        return product.description.toLowerCase().includes(this.searchKey.toLowerCase());
      });
    },
    getLikeCookie() {
      let cookieValue = JSON.parse($cookies.get('like'));
      cookieValue == null ? this.liked = [] : this.liked = cookieValue; 
    },
    cartTotalAmount() {     
      let total = 0;
      for (let item in this.cart) {
        total = total + (this.cart[item].quantity * this.cart[item].price);
      }
      return total;
    },
    itemTotalAmount(){
      let itemTotal = 0;
      for (let item in this.cart) {
        itemTotal = itemTotal + (this.cart[item].quantity);
      }
      return itemTotal;
    }
  },
  methods: {
    setLikeCookie() {
      document.addEventListener('input', () => {
        setTimeout(() => {
          let cookieValue = this.liked;
          cookieValue = JSON.stringify(cookieValue)
          $cookies.set('like', cookieValue); 
        }, 300);
      })
    },
    addToCart(product) {
      // check if already in array
      for (let i = 0; i < this.cart.length; i++) {
        if (this.cart[i].id === product.id) {
          return this.cart[i].quantity++ 
        }
      }
      this.cart.push({
        id: product.id,
        img: product.img,
        description: product.description,
        price: product.price,
        quantity: 1
      })
    },
    cartPlusOne(product) {
      product.quantity = product.quantity + 1;
    },
    cartMinusOne(product, id) {
      if (product.quantity == 1) {
        this.cartRemoveItem(id);
      } else {
        product.quantity = product.quantity - 1;
      }
    },
    cartRemoveItem(id) {
      this.$delete(this.cart, id)   
    }
  },
  mounted: function(){
    this.getLikeCookie;
  }
}

const WishList = {
  template: '<h1 style = "color: white">Wish List</h1>',
  name: 'WishList',
}
const UserSettings = {
  template: '<h1 style = "color: white">User Settings</h1>',
  name: 'UserSettings'
}
const ShoppingCart = {
  template: '<h1 style = "color: white">Shopping Cart</h1>',
  name: 'ShoppingCart'
}

// router
const router = new VueRouter({
  routes: [   
    { path: '/', component: Home, name:'Home' },
    { path: '/user-settings', component: UserSettings, name:'UserSettings' },
    { path: '/wish-list', component: WishList, name:'WishList' },
    { path: '/shopping-cart', component: ShoppingCart, name:'ShoppingCart'}
  ]
})

const vue = new Vue({
  router
}).$mount('#app');