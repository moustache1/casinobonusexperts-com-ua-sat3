/**
 * Create FAQPage DATA in JSON-LD
 *
 * @param {array} data - an array with object of the form --> { name: value, text: value }
 * @return {string} - JSON string data
 */
const createJsonFAQ = data => {
    const FAQ = []
  
    for (const item of data) {
      const { name, text } = item
      const FAQObj = `
      {
        "@type": "Question",
        "name": "${name.trim()}",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "${text.trim()}"
        }
      }
      `
      FAQ.push(JSON.parse(FAQObj))
    }
  
    const jsonScript = `
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": ${JSON.stringify(FAQ)}
    }
    `
    return JSON.stringify(JSON.parse(jsonScript))
  }
  
  export default (
    blockSelector,
    itemSelector,
    questionSelector,
    answerSelector
  ) => {
    // get data from FAQ fields
    const faqData = []
    const faqBlocks = document.querySelectorAll(blockSelector)
  
    faqBlocks.forEach(faq => {
      const faqItem = faq.querySelectorAll(itemSelector)
      faqItem.forEach(item => {
        const faqQuestion = item.querySelector(questionSelector)
        const faqAnswers = item.querySelector(answerSelector)
        const itemObj = {
          name: faqQuestion.textContent,
          text: faqAnswers.textContent
        }
        faqData.push(itemObj)
      })
    })
  
    // add script on the page in head
    const scriptTag = document.createElement('script')
    scriptTag.type = 'application/ld+json'
  
    const code = faqData.length != 0 ? createJsonFAQ(faqData) : false
  
    if (code) {
      try {
        scriptTag.appendChild(document.createTextNode(code))
        document.head.appendChild(scriptTag)
      } catch (e) {
        scriptTag.text = code
        document.head.appendChild(scriptTag)
      }
    }
  }