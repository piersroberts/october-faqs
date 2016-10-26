### Creating a FAQ
1. Choose the FAQ icon from the nav bar
2. Click New FAQ
3. Optionally give the FAQ a name
4. Add questions by clicking the Add Question button and filling out the form
5. Save the FAQ and make a note of the Id number that is created

To reorder the questions, make sure you have saved the FAQ first and then click the "Reorder Question" and drag the questions to the correct order and hit save.

### Using FAQs in your Twig templates
1. Make a note of the Id of the FAQ that you want to use
2. In your template add the FAQ component and set the FAQ Id to the number of the FAQ you want to display
3. In you template content add something like;
```
<h1>{{ faq.title }}</h1>
<ul>
    {% for item in faq.questions %}
        <li>
        <h4>{{ item.question }}</h4>
        {% if item.details %}<p><em>{{ item.details }}</em></p>{% endif %}
        <p>{{ item.answer|raw }}</p>
        </li>
    {% endfor %}
</ul>
```
