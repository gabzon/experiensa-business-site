const posts = [
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "man" },
	{ "type": "boots", "color": "black", "sex": "woman" },
	{ "type": "boots", "color": "black", "sex": "woman" },
	{ "type": "boots", "color": "black", "sex": "woman" },
	{ "type": "boots", "color": "black", "sex": "woman" },
	{ "type": "boots", "color": "black", "sex": "woman" },
	{ "type": "boots", "color": "black", "sex": "woman" },
	{ "type": "boots", "color": "black", "sex": "woman" },
	{ "type": "boots", "color": "black", "sex": "woman" },
	{ "type": "boots", "color": "black", "sex": "woman" },
	{ "type": "boots", "color": "black", "sex": "woman" },
	{ "type": "boots", "color": "black", "sex": "woman" },
	{ "type": "boots", "color": "black", "sex": "woman" },
	{ "type": "boots", "color": "black", "sex": "woman" },
	{ "type": "boots", "color": "black", "sex": "woman" },
	{ "type": "boots", "color": "black", "sex": "woman" },
	{ "type": "boots", "color": "black", "sex": "woman" },
	{ "type": "boots", "color": "black", "sex": "woman" },
	{ "type": "boots", "color": "brown", "sex": "man" },
	{ "type": "boots", "color": "brown", "sex": "man" },
	{ "type": "boots", "color": "brown", "sex": "man" },
	{ "type": "boots", "color": "brown", "sex": "man" },
	{ "type": "boots", "color": "brown", "sex": "man" },
	{ "type": "boots", "color": "white", "sex": "woman" },
	{ "type": "boots", "color": "white", "sex": "woman" },
	{ "type": "boots", "color": "white", "sex": "woman" },
	{ "type": "boots", "color": "beige", "sex": "man" },
	{ "type": "boots", "color": "beige", "sex": "man" },
	{ "type": "boots", "color": "beige", "sex": "man" },
	{ "type": "boots", "color": "beige", "sex": "man" },
	{ "type": "boots", "color": "beige", "sex": "woman" },
	{ "type": "boots", "color": "beige", "sex": "woman" },
	{ "type": "boots", "color": "beige", "sex": "woman" },
	{ "type": "boots", "color": "beige", "sex": "woman" },
	{ "type": "boots", "color": "beige", "sex": "woman" },
	{ "type": "boots", "color": "red", "sex": "man" },
	{ "type": "boots", "color": "red", "sex": "man" },
	{ "type": "boots", "color": "red", "sex": "man" },
	{ "type": "boots", "color": "red", "sex": "woman" },
	{ "type": "boots", "color": "red", "sex": "woman" },
	{ "type": "boots", "color": "red", "sex": "woman" },
	{ "type": "boots", "color": "red", "sex": "woman" },
	{ "type": "boots", "color": "red", "sex": "woman" },
  { "type": "boots", "color": "blue","sex": "man" },
	{ "type": "boots", "color": "blue", "sex": "man" },
	{ "type": "boots", "color": "blue", "sex": "woman" },
	{ "type": "boots", "color": "blue", "sex": "woman" },
	{ "type": "shoes", "color": "black", "sex": "man" },
	{ "type": "shoes", "color": "black", "sex": "man" },
	{ "type": "shoes", "color": "black", "sex": "man" },
	{ "type": "shoes", "color": "black", "sex": "man" },
	{ "type": "shoes", "color": "black", "sex": "man" },
	{ "type": "shoes", "color": "black", "sex": "man" },
	{ "type": "shoes", "color": "black", "sex": "man" },
  { "type": "shoes", "color": "black", "sex": "man" },
	{ "type": "shoes", "color": "black", "sex": "man" },
	{ "type": "shoes", "color": "black", "sex": "man" },
	{ "type": "shoes", "color": "black", "sex": "man" },
	{ "type": "shoes", "color": "black", "sex": "man" },
	{ "type": "shoes", "color": "black", "sex": "man" },
	{ "type": "shoes", "color": "black", "sex": "man" },
	{ "type": "shoes", "color": "black", "sex": "man" },
	{ "type": "shoes", "color": "black", "sex": "woman" },
	{ "type": "shoes", "color": "black", "sex": "woman" },
	{ "type": "shoes", "color": "black", "sex": "woman" },
	{ "type": "shoes", "color": "brown", "sex": "man" },
	{ "type": "shoes", "color": "brown", "sex": "man" },
	{ "type": "shoes", "color": "brown", "sex": "man" },
	{ "type": "shoes", "color": "brown", "sex": "man" },
	{ "type": "shoes", "color": "brown", "sex": "man" },
	{ "type": "shoes", "color": "brown", "sex": "woman" },
	{ "type": "shoes", "color": "brown", "sex": "woman" },
	{ "type": "shoes", "color": "brown", "sex": "woman" },
	{ "type": "shoes", "color": "brown", "sex": "woman" },
	{ "type": "shoes", "color": "brown", "sex": "woman" },
	{ "type": "shoes", "color": "brown", "sex": "woman" },
	{ "type": "shoes", "color": "brown", "sex": "woman" },
	{ "type": "shoes", "color": "brown", "sex": "woman" },
	{ "type": "shoes", "color": "brown", "sex": "woman" },
	{ "type": "shoes", "color": "brown", "sex": "woman" },
	{ "type": "shoes", "color": "brown", "sex": "woman" },
	{ "type": "shoes", "color": "white", "sex": "man" },
	{ "type": "shoes", "color": "white", "sex": "man" },
	{ "type": "shoes", "color": "white", "sex": "man" },
	{ "type": "shoes", "color": "white", "sex": "man" },
	{ "type": "shoes", "color": "white", "sex": "man" },
	{ "type": "shoes", "color": "white", "sex": "man" },
	{ "type": "shoes", "color": "white", "sex": "man" },
	{ "type": "shoes", "color": "white", "sex": "woman" },
	{ "type": "shoes", "color": "white", "sex": "woman" },
	{ "type": "shoes", "color": "white", "sex": "woman" },
	{ "type": "shoes", "color": "white", "sex": "woman" },
	{ "type": "shoes", "color": "white", "sex": "woman" },
	{ "type": "shoes", "color": "white", "sex": "woman" },
	{ "type": "shoes", "color": "white", "sex": "woman" },
	{ "type": "sandals","color": "black", "sex": "man" },
	{ "type": "sandals", "color": "black", "sex": "man" },
	{ "type": "sandals", "color": "black", "sex": "man" },
	{ "type": "sandals", "color": "black", "sex": "man" },
	{ "type": "sandals", "color": "black", "sex": "man" },
	{ "type": "sandals", "color": "black", "sex": "man" },
	{ "type": "sandals", "color": "black", "sex": "man" },
	{ "type": "sandals", "color": "black", "sex": "man" },
	{ "type": "sandals", "color": "red", "sex": "woman" },
	{ "type": "sandals", "color": "red", "sex": "woman" },
	{ "type": "sandals", "color": "red", "sex": "woman" },
	{ "type": "sandals", "color": "red", "sex": "woman" },
	{ "type": "sandals", "color": "red", "sex": "woman" },
	{ "type": "sandals", "color": "blue", "sex": "man" },
	{ "type": "sandals", "color": "blue", "sex": "man" },
	{ "type": "sandals", "color": "blue", "sex": "woman" },
	{ "type": "sandals", "color": "blue", "sex": "woman" },
	{ "type": "gumshoes", "color": "black", "sex": "man" },
	{ "type": "gumshoes", "color": "black", "sex": "man" },
	{"type": "gumshoes","color": "brown","sex": "man"},
	{ "type": "gumshoes", "color": "white", "sex": "woman" },
	{ "type": "gumshoes", "color": "white", "sex": "woman" },
	{ "type": "gumshoes", "color": "white", "sex": "woman" },
	{ "type": "gumshoes", "color": "white", "sex": "woman" },
	{ "type": "gumshoes", "color": "white", "sex": "woman" },
	{ "type": "gumshoes", "color": "beige", "sex": "man" },
	{ "type": "gumshoes", "color": "beige", "sex": "man" },
	{ "type": "gumshoes", "color": "beige", "sex": "man" },
	{ "type": "gumshoes", "color": "beige", "sex": "man" },
	{ "type": "gumshoes", "color": "beige", "sex": "man" },
	{ "type": "sneakers", "color": "black", "sex": "man" },
	{ "type": "sneakers", "color": "black", "sex": "man" },
	{ "type": "sneakers", "color": "black", "sex": "man" },
	{ "type": "sneakers", "color": "black", "sex": "man" },
	{ "type": "sneakers", "color": "black", "sex": "man" },
	{ "type": "sneakers", "color": "black", "sex": "man" },
	{ "type": "sneakers", "color": "black", "sex": "woman" },
	{ "type": "sneakers", "color": "black", "sex": "woman" },
	{ "type": "sneakers", "color": "black", "sex": "woman" },
	{ "type": "sneakers", "color": "black", "sex": "woman" },
	{ "type": "sneakers", "color": "black", "sex": "woman" },
	{ "type": "sneakers", "color": "black", "sex": "woman" },
	{ "type": "sneakers", "color": "black", "sex": "woman" },
	{ "type": "sneakers", "color": "black", "sex": "woman" },
	{ "type": "sneakers", "color": "black", "sex": "woman" },
	{ "type": "sneakers", "color": "black", "sex": "woman" },
	{ "type": "sneakers", "color": "black", "sex": "woman" },
	{ "type": "sneakers", "color": "brown", "sex": "man" },
	{ "type": "sneakers", "color": "brown", "sex": "man" },
	{ "type": "sneakers", "color": "brown", "sex": "man" },
	{ "type": "sneakers", "color": "brown", "sex": "man" },
	{ "type": "sneakers", "color": "brown", "sex": "man" },
	{ "type": "sneakers", "color": "brown", "sex": "man" },
	{ "type": "sneakers", "color": "brown", "sex": "man" },
	{ "type": "sneakers", "color": "brown", "sex": "man" },
	{ "type": "sneakers", "color": "brown", "sex": "man" },
	{ "type": "sneakers", "color": "brown", "sex": "man" },
	{ "type": "sneakers", "color": "brown", "sex": "man" },
	{ "type": "sneakers", "color": "brown", "sex": "woman" },
	{ "type": "sneakers", "color": "brown", "sex": "woman" },
	{ "type": "sneakers", "color": "brown", "sex": "woman" },
	{ "type": "sneakers", "color": "brown", "sex": "woman" },
	{ "type": "sneakers", "color": "brown", "sex": "woman" },
	{ "type": "sneakers", "color": "brown", "sex": "woman" },
	{ "type": "sneakers", "color": "brown", "sex": "woman" },
	{ "type": "sneakers", "color": "brown", "sex": "woman" },
	{ "type": "sneakers", "color": "brown", "sex": "woman" },
	{ "type": "sneakers", "color": "brown", "sex": "woman" },
	{ "type": "sneakers", "color": "brown", "sex": "woman" },
	{ "type": "sneakers", "color": "white", "sex": "man" },
	{ "type": "sneakers", "color": "white", "sex": "man" },
	{ "type": "sneakers", "color": "white", "sex": "man" },
	{ "type": "sneakers", "color": "white", "sex": "man" },
	{ "type": "sneakers", "color": "white", "sex": "man" },
	{ "type": "sneakers", "color": "white", "sex": "man" },
	{ "type": "sneakers", "color": "white", "sex": "man" },
	{ "type": "sneakers", "color": "white", "sex": "woman" },
	{ "type": "sneakers", "color": "white", "sex": "woman" },
	{ "type": "sneakers", "color": "white", "sex": "woman" },
	{ "type": "sneakers", "color": "white", "sex": "woman" },
	{ "type": "sneakers", "color": "white", "sex": "woman" },
	{ "type": "sneakers", "color": "white", "sex": "woman" },
	{ "type": "sneakers", "color": "white", "sex": "woman" },
	{ "type": "sneakers", "color": "white", "sex": "woman" },
	{ "type": "sneakers", "color": "beige", "sex": "man" },
	{ "type": "sneakers", "color": "beige", "sex": "man" },
	{ "type": "sneakers", "color": "beige", "sex": "man" },
	{ "type": "sneakers", "color": "beige", "sex": "man" },
  { "type": "sneakers", "color": "beige", "sex": "man" },
	{ "type": "sneakers", "color": "beige", "sex": "woman" },
	{ "type": "sneakers", "color": "beige", "sex": "woman" },
	{ "type": "sneakers", "color": "beige", "sex": "woman" },
	{ "type": "sneakers", "color": "beige", "sex": "woman" },
	{ "type": "sneakers", "color": "beige", "sex": "woman" },
	{ "type": "sneakers", "color": "red","sex": "man" },
	{ "type": "sneakers", "color": "red", "sex": "man" },
	{ "type": "sneakers", "color": "red", "sex": "man" },
  { "type": "sneakers", "color": "red","sex": "woman" },
	{ "type": "sneakers", "color": "red","sex": "woman" },
	{ "type": "sneakers", "color": "red", "sex": "woman" },
	{ "type": "sneakers", "color": "red", "sex": "woman" },
	{ "type": "sneakers", "color": "red", "sex": "woman" },
	{ "type": "sneakers", "color": "blue", "sex": "man" },
	{ "type": "sneakers", "color": "blue", "sex": "man" },
	{ "type": "sneakers", "color": "blue", "sex": "woman" },
	{ "type": "sneakers", "color": "blue", "sex": "woman" },
	{ "type": "slippers", "color": "black", "sex": "man" },
	{ "type": "slippers", "color": "black", "sex": "man" },
	{ "type": "slippers", "color": "black", "sex": "man" },
	{ "type": "slippers", "color": "black", "sex": "man" },
	{ "type": "slippers", "color": "black", "sex": "man" },
	{ "type": "slippers", "color": "black", "sex": "man" },
	{ "type": "slippers", "color": "black", "sex": "man" },
	{ "type": "slippers", "color": "black", "sex": "man" },
	{ "type": "slippers", "color": "black", "sex": "man" },
	{ "type": "slippers", "color": "black", "sex": "man" },
	{ "type": "slippers", "color": "black", "sex": "man" },
	{ "type": "slippers", "color": "black", "sex": "man" },
	{ "type": "slippers", "color": "black", "sex": "man" },
	{ "type": "slippers", "color": "black", "sex": "man" },
	{ "type": "slippers", "color": "black", "sex": "man" },
	{ "type": "slippers", "color": "black", "sex": "woman" },
	{ "type": "slippers", "color": "black", "sex": "woman" },
	{ "type": "slippers", "color": "black", "sex": "woman" },
	{ "type": "slippers", "color": "black", "sex": "woman" },
	{ "type": "slippers", "color": "black", "sex": "woman" },
	{ "type": "slippers", "color": "black", "sex": "woman" },
	{ "type": "slippers", "color": "black", "sex": "woman" },
	{ "type": "slippers", "color": "black", "sex": "woman" },
	{ "type": "slippers", "color": "black", "sex": "woman" },
	{ "type": "slippers", "color": "black", "sex": "woman" },
	{ "type": "slippers", "color": "black", "sex": "woman" },
	{ "type": "slippers", "color": "black", "sex": "woman" },
	{ "type": "slippers", "color": "black", "sex": "woman" },
	{ "type": "slippers", "color": "black", "sex": "woman" },
	{ "type": "slippers", "color": "brown", "sex": "man" },
	{ "type": "slippers", "color": "brown", "sex": "man" },
	{ "type": "slippers", "color": "brown", "sex": "man" },
	{ "type": "slippers", "color": "brown", "sex": "man" },
	{ "type": "slippers", "color": "brown", "sex": "man" },
	{ "type": "slippers", "color": "brown", "sex": "man" },
	{ "type": "slippers", "color": "brown", "sex": "man" },
	{ "type": "slippers", "color": "brown", "sex": "man" },
	{ "type": "slippers", "color": "brown", "sex": "man" },
	{ "type": "slippers", "color": "brown", "sex": "man" },
	{ "type": "slippers", "color": "brown", "sex": "man" },
	{ "type": "slippers", "color": "brown", "sex": "woman" },
	{ "type": "slippers", "color": "brown", "sex": "woman" },
	{ "type": "slippers", "color": "brown", "sex": "woman" },
	{ "type": "slippers", "color": "brown", "sex": "woman" },
	{ "type": "slippers", "color": "brown", "sex": "woman" },
	{ "type": "slippers", "color": "brown", "sex": "woman" },
	{ "type": "slippers", "color": "brown", "sex": "woman" },
	{ "type": "slippers", "color": "brown", "sex": "woman" },
	{ "type": "slippers", "color": "brown", "sex": "woman" },
	{ "type": "slippers", "color": "brown", "sex": "woman" },
	{ "type": "slippers", "color": "brown", "sex": "woman" },
	{ "type": "slippers", "color": "white", "sex": "man" },
	{ "type": "slippers", "color": "white", "sex": "man" },
	{ "type": "slippers", "color": "white", "sex": "man" },
	{ "type": "slippers", "color": "white", "sex": "man" },
	{ "type": "slippers", "color": "white", "sex": "man" },
	{ "type": "slippers", "color": "white", "sex": "man" },
	{ "type": "slippers", "color": "white", "sex": "man" },
	{ "type": "slippers", "color": "white", "sex": "woman" },
	{ "type": "slippers", "color": "white", "sex": "woman" },
	{ "type": "slippers",	"color": "white",	"sex": "woman" },
	{	"type": "slippers", "color": "white", "sex": "woman" },
	{ "type": "slippers", "color": "white", "sex": "woman" },
	{ "type": "slippers", "color": "white", "sex": "woman" },
	{ "type": "slippers", "color": "white", "sex": "woman" },
	{ "type": "slippers", "color": "white", "sex": "woman" },
	{ "type": "slippers", "color": "beige", "sex": "man" },
	{ "type": "slippers", "color": "beige", "sex": "man" },
	{ "type": "slippers", "color": "beige", "sex": "man" },
	{ "type": "slippers", "color": "beige", "sex": "man" },
	{ "type": "slippers", "color": "beige", "sex": "man" },
	{ "type": "slippers", "color": "beige", "sex": "woman" },
	{ "type": "slippers", "color": "beige", "sex": "woman" },
	{ "type": "slippers", "color": "beige", "sex": "woman" },
	{ "type": "slippers", "color": "beige", "sex": "woman" },
	{	"type": "slippers", "color": "beige", "sex": "woman" },
	{ "type": "slippers",	"color": "red", "sex": "man" },
	{ "type": "slippers", "color": "red", "sex": "man" },
	{ "type": "slippers", "color": "red", "sex": "man" },
  { "type": "slippers", "color": "red", "sex": "woman" },
	{ "type": "slippers", "color": "red", "sex": "woman" },
	{ "type": "slippers", "color": "red", "sex": "woman" },
	{ "type": "slippers", "color": "red", "sex": "woman" },
	{ "type": "slippers", "color": "red", "sex": "woman" },
	{ "type": "slippers", "color": "blue", "sex": "man" },
	{ "type": "slippers", "color": "blue", "sex": "man" },
	{ "type": "slippers", "color": "blue", "sex": "woman" },
	{ "type": "slippers", "color": "blue", "sex": "woman" },
];

export default posts;

//
// {
//   "type": "boots",
//   "color": "white",
//   "sex": "woman"
// },
// {
//   "type": "boots",
//   "color": "white",
//   "sex": "woman"
// },
// {
//   "type": "boots",
//   "color": "white",
//   "sex": "woman"
// },
// {
//   "type": "boots",
//   "color": "white",
//   "sex": "woman"
// },
// {
//   "type": "boots",
//   "color": "beige",
//   "sex": "man"
// },
// {
//   "type": "sneakers",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "sneakers",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "sneakers",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "sneakers",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "sneakers",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "sneakers",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "sneakers",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "sneakers",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "sneakers",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "sneakers",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "sneakers",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "sneakers",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "beige",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "beige",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "beige",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "beige",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "beige",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "red",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "red",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "red",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "red",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "red",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "red",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "red",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "red",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "blue",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "blue",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "blue",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "blue",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "white",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "white",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "white",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "gumshoes",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "white",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "white",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "white",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "white",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "white",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "white",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "white",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "white",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "beige",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "beige",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "beige",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "beige",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "beige",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "beige",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "beige",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "beige",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "beige",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "beige",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "red",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "red",
//   "sex": "man"
// },
// {
//   "type": "sandals",
//   "color": "red",
//   "sex": "man"
// },
// {
//   "type": "boots",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "boots",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "boots",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "boots",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "black",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "shoes",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "shoes",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "shoes",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "shoes",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "shoes",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "boots",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "boots",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "boots",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "boots",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "boots",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "boots",
//   "color": "brown",
//   "sex": "man"
// },
// {
//   "type": "boots",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "boots",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "boots",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "boots",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "boots",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "boots",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "boots",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "boots",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "boots",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "boots",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "boots",
//   "color": "brown",
//   "sex": "woman"
// },
// {
//   "type": "boots",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "boots",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "boots",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "boots",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "boots",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "boots",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "boots",
//   "color": "white",
//   "sex": "man"
// },
// {
//   "type": "boots",
//   "color": "white",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "white",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "beige",
//   "sex": "man"
// },
// {
//   "type": "shoes",
//   "color": "beige",
//   "sex": "man"
// },
// {
//   "type": "shoes",
//   "color": "beige",
//   "sex": "man"
// },
// {
//   "type": "shoes",
//   "color": "beige",
//   "sex": "man"
// },
// {
//   "type": "shoes",
//   "color": "beige",
//   "sex": "man"
// },
// {
//   "type": "shoes",
//   "color": "beige",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "beige",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "beige",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "beige",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "beige",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "red",
//   "sex": "man"
// },
// {
//   "type": "shoes",
//   "color": "red",
//   "sex": "man"
// },
// {
//   "type": "shoes",
//   "color": "red",
//   "sex": "man"
// },
// {
//   "type": "shoes",
//   "color": "red",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "red",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "red",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "red",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "red",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "blue",
//   "sex": "man"
// },
// {
//   "type": "shoes",
//   "color": "blue",
//   "sex": "man"
// },
// {
//   "type": "shoes",
//   "color": "blue",
//   "sex": "woman"
// },
// {
//   "type": "shoes",
//   "color": "blue",
//   "sex": "woman"
// },
// {
//   "type": "sandals",
//   "color": "black",
//   "sex": "man"
// },
