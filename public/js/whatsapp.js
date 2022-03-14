
const puppeteer = require("puppeteer");

async function Bot(){
    const browser = await puppeteer.launch({ headless: false });

    const page = await browser.newPage();
    await page.goto('https://web.whatsapp.com/send?phone=5511952409765text=bomdia' , {waitUntil: 'networkidle0'});
   await page.waitFor(10000);

   //node await page.type("_2vbn4._13NKt" , 'Bom dia Mano');

}

Bot();

