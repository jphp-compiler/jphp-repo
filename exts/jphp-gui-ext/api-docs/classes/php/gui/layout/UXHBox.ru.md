# UXHBox

- **класс** `UXHBox` (`php\gui\layout\UXHBox`) **унаследован от** `UXPane` (`php\gui\layout\UXPane`)
- **пакет** `gui`
- **исходники** `php/gui/layout/UXHBox.php`

**Описание**

Class UXHBox

---

#### Свойства

- `->`[`alignment`](#prop-alignment) : `string` - _TOP_LEFT, TOP_CENTER, TOP_RIGHT, CENTER_LEFT, ... CENTER, ... BOTTOM_RIGHT,
BASELINE_LEFT, BASELINE_CENTER, BASELINE_RIGHT_
- `->`[`spacing`](#prop-spacing) : `float`
- `->`[`fillHeight`](#prop-fillheight) : `bool`

---

#### Статичные Методы

- `UXHBox ::`[`setHgrow()`](#method-sethgrow)
- `UXHBox ::`[`getHgrow()`](#method-gethgrow)
- `UXHBox ::`[`setMargin()`](#method-setmargin)

---

#### Методы

- `->`[`__construct()`](#method-__construct)
- `->`[`requestLayout()`](#method-requestlayout)

---
# Статичные Методы

<a name="method-sethgrow"></a>

### setHgrow()
```php
UXHBox::setHgrow(php\gui\UXNode $node, string $value): void
```

---

<a name="method-gethgrow"></a>

### getHgrow()
```php
UXHBox::getHgrow(php\gui\UXNode $node): void
```

---

<a name="method-setmargin"></a>

### setMargin()
```php
UXHBox::setMargin(php\gui\UXNode $node, double[]|double $margins): void
```

---
# Методы

<a name="method-__construct"></a>

### __construct()
```php
__construct(UXNode[] $nodes, int $spacing): void
```

---

<a name="method-requestlayout"></a>

### requestLayout()
```php
requestLayout(): void
```